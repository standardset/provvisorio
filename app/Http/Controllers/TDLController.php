<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TDL\Teamdatalog;
use DateTime;
use App\Model\TDL\Event;

class TDLController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventi()
    {
        $tdl = new Teamdatalog(env('TDL_USERNAME'),env('TDL_SECRET_KEY'),env('TDL_ENDPOINT'));

        $calendars = $tdl->list_calendars();

        $events_type = $tdl->list_event_types();

        $date = new DateTime(); //now
        $events = $tdl->get_events_from(
            $date,
            "arti_performative,arti_visive,letteratura_e_cinema,atelier,socio_ricreativo,musica,5279248d160000160096c184", // tutti i tipi presenti nel calendario
            "592bf008630000630070891a,594926ad630000d50070891f,594926b1630000c300708920,5970bb19630000e907708961,5970bb37630000f407708962,5970bb46630000e007708963,5970bb616300000308708964,5970bb706300000708708965,5970bb80630000ff07708966,5970bb8a630000ff07708967,5a0c4ce32a0100a205be13d9"
        );
        

        $publishedEvents = array_filter($events,function ($e) { 
            if(!isset($e->data->stato)) return false;
            return ($e->data->stato != "mmf2qbzmn"); 
        });


        $eventi = array_map(function ($e) use( $calendars, $events_type) {
            $event = new Event();
            
            $data_inizio = new DateTime();
            $data_inizio = $data_inizio->setTimestamp($e->start/1000);
            $event->data_inizio = $data_inizio;

            $data_fine = new DateTime();
            $data_fine = $data_fine->setTimestamp($e->end/1000);
            $event->data_fine = $data_fine;

            if(isset($e->data->title)) {
                $event->titolo = $e->data->title;
            }
            
            if(isset($e->data->description)) {
                $event->descrizione = $e->data->description;
            }

            if(isset($e->data->nomeorganizzatore)) {
                $event->organizzatore = $e->data->nomeorganizzatore;
            }

            if(isset($e->data->location)) {
                $event->info = $e->data->location;
            }

            $calendarFiltered = array_filter($calendars,function ($c) use(&$e) { 
                return strcmp($c->id,$e->teamId) == 0; 
            });

            $calendar = array_shift($calendarFiltered);

            if(isset($calendar)) {
                $event->locale = $calendar->name;
            }

            $tipoFiltered = array_filter($events_type,function ($c) use($e) { return $c->id === $e->formId; });
            
            $tipo = array_shift($tipoFiltered);

            if(isset($tipo)) {
                $event->tipo = $tipo->name;
            }

            return $event;

        },$publishedEvents);
        


        return view('elle.tdl', ['eventi' => $eventi]);
    }
}
