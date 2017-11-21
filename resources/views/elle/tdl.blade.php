@extends('elle.base')

@section('eventi')
<div class="flexbox">


<!--
<?php    
    
for( $contatore=1; $contatore<20; $contatore++ ){
		echo '<div class="evento">
<img class="ridimensiona" src="/img/placeholder.jpg" width="150px" height="auto"/> 

<h2 class="titolo_evento">
       Questo è il titolo <br/>dell evento numero uno
</h2>
<p class="testo_evento">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien.

</p>
   
</div>';
	}


?>   
-->



<?php foreach($eventi as $evento) { ?>
<!-- ////////////EVENTO//////////////////////-->
<div class="evento">
<div style="padding: 15px;">
<h2 class="titolo_evento"><?php echo $evento->data_inizio->format('G:i l j F Y');?> <br/> <?php echo $evento->titolo; ?></h2>
 
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

<!-- ////////////FINE EVENTO//////////////////////-->
<?php } ?>























</div>
@endsection
