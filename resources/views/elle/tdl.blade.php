@extends('elle.base')

@section('eventi')
<!-- <div class="flexbox"> -->






<div class="grid"> 

<?php foreach($eventi as $evento) { ?>
<!-- ////////////EVENTO//////////////////////-->


<div class="grid-item">


<h3 class="data_evento"><i class="fa fa-clock-o" aria-hidden="true"></i><span>&nbsp;&nbsp;</span> <?php echo $evento->data_inizio->format('G:i l j F Y');?></h3>
<hr class="gradient">
<br/>
<div class="rientranza_eventi"> 
<h2 class="titolo_evento">
<?php echo $evento->titolo; ?>
</h2>
 
<p class="testo_evento">
<?php echo nl2br($evento->descrizione); ?>
<br/>
<br/>
<?php echo "Organizzatore: ".$evento->organizzatore; ?>
<br/>
<?php echo "Locale: ".$evento->locale; ?>
<br/>
<?php echo nl2br( "Info: ".$evento->info); ?>
<br/>
</p>
</div> 

   
</div>
 
    
<!-- ////////////FINE EVENTO//////////////////////-->
<?php } ?>

   </div>



<!--</div>-->

@endsection
