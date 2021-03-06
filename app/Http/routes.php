<?php


use App\Task; 


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('elle.home');
    })->middleware('guest');

    Route::get('/spazi', function () {
        return view('elle.spazi');
    });
    
    Route::get('/eventi', function () {
        return view('elle.eventi');
    });
    
        Route::get('/corsi', function () {
        return view('elle.corsi');
    });
    
    
     Route::get('/mappa', function () {
        return view('elle.mappa');
    });
        
    Route::get('/contatti', function () {
        return view('elle.contatti');
    });
    
        Route::get('/calendario', function () {
        return view('elle.tdl');
    });
    
    
    Route::get('/tdl','TDLController@eventi');
    
    
    
     ////////////////TUTORIAL LARAVEL ////////////////////////
    
    
    Route::get('/prova_database', function () {
             
       $tasks = App\Task::all();
             
         return view('elle.prova_database', compact('tasks'));
    });
    
    
    

    
    
   
    Route::get('prova_database/tasks/', function () {
                 
             $tasks = DB::table('tasks')->latest()->get();
        
          return view('elle.prova_database_index', compact('tasks'));
    });
    
    
    
    
    
    Route::get('prova_database/{task}', function ($id) {
                 
            $task = Task::find($id);
        
        return view('elle.prova_database_show', compact('task'));
    });
    
    
    
    
    
    
    
    /////////////////// FINE TUTORIAL LARAVEL /////////////// 
    
    
    
    
    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');
    Route::auth();
    

});
