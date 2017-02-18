<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



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






</head>
<body class="cambia_colore" style="text-align: center;">





<div class="fascia_menu">

<img style="float: left; padding-left: 20px; margin-top: 10px;" src="/img/logo_elle_fascia_menu.png" alt="logo spazio elle" height="55px" width="*"/>


<div style="float: left ; margin-left: 30px; margin-top: 26px;">
<p style="text-align: left;">Piazza G. Pedrazzini 12
<br/>
6600 Locarno</p>
</div>

<ul id="menu">
<li><a href="mailto:info@ellelocarno.ch"><p>CONTATTI</p></a></li>
<li><a href="/mappa"><p>MAPPA</p></a></li>
<li><a href="/spazi"><p>SPAZI</p></a></li>
<li><a href="/"><p>HOME</p></a></li>
</ul>


<script>
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
}
</script>
</div>




<div id="container">
<div id="box_centrato">

 @yield('home')
 @yield('spazi')
 @yield('calendario')
 @yield('mappa')

</div>
</div>

</body>
            
  

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</html>
