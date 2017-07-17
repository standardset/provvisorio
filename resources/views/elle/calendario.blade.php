@extends('elle.base')

@section('calendario')
<div class="flexbox">



<?php    
    
for( $contatore=1; $contatore<20; $contatore++ ){
		echo '<div class="evento">
<img class="ridimensiona" src="/img/placeholder.jpg" width="150px" height="auto"/> 

<h2 class="titolo_evento">
       Questo è il titolo <br/>dell evento numero uno
</h2>
   
</div>';
	}


 
                                                                                                                                
 ?>   




</div>
@endsection
