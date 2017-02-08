<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ELLE LOCARNO</title>

    <!-- Google font
================================================== -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- fine google font
================================================== -->

    <!-- Styles -->
   <link href="/css/stili.css" rel="stylesheet">



<!-- TESTO MOSTRA NASCONDI PIANO INTERRATO -->
<script>
function writeTextInterrato(txt) {
    document.getElementById("interrato").innerHTML = txt;
}
</script>


<!-- TESTO MOSTRA NASCONDI PRIMO PIANO -->
<script>
function writeTextPrimo(txt) {
    document.getElementById("primo").innerHTML = txt;
}
</script>


<!-- TESTO MOSTRA NASCONDI TERZO PIANO-->
<script>
function writeTextTerzo(txt) {
    document.getElementById("terzo").innerHTML = txt;
}
</script>



<!-- /////////////// JQUERY //////////////// -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<!-- /////////////// FINE JQUERY //////////////// -->

<!-- //////////////////MOMENT/////////////// -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
<!-- //////////////////FINE MOMENT/////////////// -->

<!--////////////CALENDARIO//////////////-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>
<link href="http:http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" rel="stylesheet">




<script> 
$(document).ready(function() {


    $('#calendar').fullCalendar({
    })

});
</script>

<!--////////////FINE CALENDARIO//////////////-->


</head>
<body class="cambia_colore" style="text-align: center;">

<div class="fascia_menu">

<ul id="menu">


<li><a href="mailto:info@ellelocarno.ch"><p>CONTATTI</p></a></li>
<li><a href="/spazi"><p>SPAZI</p></a></li>
<li><a href="/"><p>HOME</p></a></li>

</ul>


</div>

<hr/>


<div id="container">
<div id="box_centrato">


<img src="/img/elle.png" alt="" />
 @yield('home')
 @yield('spazi')

</div>
</div>

</body>
            
  

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</html>
