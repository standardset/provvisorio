@extends('elle.base')

@section('eventi')
<!-- <div class="flexbox"> -->






<div class="grid"> 

<?php foreach($eventi as $evento) { ?>
<!-- ////////////EVENTO//////////////////////-->


<div class="grid-item">


<h3 class="data_evento"><?php echo $evento->data_inizio->format('G:i l j F Y');?></h3>
<h2 class="titolo_evento">
<?php echo $evento->titolo; ?>
</h2>
 
<p class="testo_evento">
<?php echo nl2br($evento->descrizione); ?>
<br/>
<br/>
<?php echo "organizzatore: ".$evento->organizzatore; ?>
<br/>
<?php echo "luogo: ".$evento->locale; ?>
<br/>
<?php echo nl2br( "info: ".$evento->info); ?>
</p>
  

   
</div>
 
    
<!-- ////////////FINE EVENTO//////////////////////-->
<?php } ?>

   </div>



<!--</div>-->

@endsection
