<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <title>SPAZIO ELLE LOCARNO</title>

    <!-- Google font
================================================== -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
<!-- fine google font
================================================== -->


    
   <link href="/css/stili.css" rel="stylesheet">
  
<!-- /////////////////// FONTAWESOME //////////////////--> 
   <script src="https://use.fontawesome.com/d849fe9aaf.js"></script>



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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  



</head>
<body class="cambia_colore" style="text-align: center;">






<div class="fascia_menu">
<span id="logo_scompare">
<img style="float: left; padding-left: 25px; margin-top: 11px;" src="/img/logo_elle_fascia_menu.png" alt="logo spazio elle" height="55px" width="*"/>
</span>

<div id="indirizzo">
<p style="text-align: left;">Piazza G. Pedrazzini 12
<br/>
6600 Locarno</p>
</div>

<ul id="menu">
<li><a class="collegamenti_menu" href="/contatti"><p>CONTATTI</p></a></li>
<li><a class="collegamenti_menu" href="/mappa"><p>MAPPA</p></a></li>
<li><a class="collegamenti_menu" href="/spazi"><p>SPAZI</p></a></li>
<li><a class="collegamenti_menu" href="/tdl"><p>CALENDARIO</p></a></li>
<li><a class="collegamenti_menu" href="/"><p>HOME</p></a></li>
</ul>


<script>
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
}
</script>
</div>


<div class="fascia_sfumatura_header">
</div>




<div id="container">
<div id="box_centrato">

 @yield('home')
 @yield('spazi')
 @yield('eventi')
 @yield('corsi')
 @yield('mappa')
 @yield('contatti')
 @yield('prova_database')

</div>
</div>

<div class="fascia_sfumatura_footer">
</div>


<div id="footer"><p>© ELLE Locarno 2017 | <a href="http://www.studiozot.com">Webmaster</a></p></div>

            
  

    <!-- JavaScripts -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    

    
  </body>
    
</html>
