@extends('elle.base')

@section('calendario')
<div class="flexbox">



<?php echo '<div class="evento">
<img class="ridimensiona" src="/img/placeholder.jpg" width="150px" height="auto"/> 

<h2 class="titolo_evento">
       Questo è il titolo <br/>dell evento numero uno
</h2>
   
</div>'; 
    
    
    
for( $contatore=1; $contatore<10; $contatore++ ){
		echo "siamo entrati nel ciclo per la " . $contatore . " volta <br>";
	}


 
                                                                                                                                
 ?>   




</div>
@endsection
