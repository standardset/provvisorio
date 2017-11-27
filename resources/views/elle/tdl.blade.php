@extends('elle.base')

@section('eventi')
<div class="flexbox">

<script>
$('.corso').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.corso',
  // use element for option
  columnWidth: '.corso',
  percentPosition: true
})

</script>

<?php foreach($eventi as $evento) { ?>
<!-- ////////////EVENTO//////////////////////-->
<div class="grid"> 

<div class="grid-item">
<div style="padding: 15px;">

<h3 class="data_evento"><?php echo $evento->data_inizio->format('G:i l j F Y');?></h3>
<h2 class="titolo_evento">
<?php echo $evento->titolo; ?>
</h2>
 
<p class="testo_evento">
<?php echo nl2br($evento->descrizione); ?>
<br/>
<br/>
<?php echo $evento->organizzatore; ?>
<br/>
<?php echo $evento->locale; ?>
<br/>
<?php echo nl2br($evento->info); ?>
</p>
  
 </div>
   
</div>
    </div>
    
<!-- ////////////FINE EVENTO//////////////////////-->
<?php } ?>


<div class="grid">
  <div class="grid-item">...</div>
  <div class="grid-item grid-item--width2">...</div>
  <div class="grid-item">...</div>
  ...
</div>

























</div>
@endsection
