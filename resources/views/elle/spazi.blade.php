@extends('elle.base')

@section('spazi')
<div>


<br/><br/>
<p>Piano interrato</p>
<br/>
<img src="img/locali_piano_interrato.svg" alt="" width="300px" height="*"/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<p>Primo piano</p>
<br/>
<img src="img/locali_primo_piano.svg" alt="" width="300px" height="*" />
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<!--//////////////////TERZO PIANO/////////////////////-->
<p><span style="background-color:#f8e0b5">&nbsp;TERZO PIANO&nbsp;</span></p>
<br/>

<img src="img/locali_terzo_piano.svg" alt="Locali terzo piano"  width="300px" height="300px" usemap="#terzo_piano" />

<map name="terzo_piano">

<area shape="rect" coords="0,90,95,300" onmouseover="writeText('Terzo piano, stanza A, metri quadri 55.36')" onmouseout="writeText('Sposta il mouse sulle stanze per avere le informazioni.')"/>



<area shape="rect" coords="110,180,212,295" onmouseover="writeText('Terzo piano, stanza B, metri quadri 40.29')" onmouseout="writeText('Sposta il mouse sulle stanze per avere le informazioni.')"/>



<area shape="rect" coords="110,95,200,175" onmouseover="writeText('Terzo piano, stanza C, metri quadri 24.56')" onmouseout="writeText('Sposta il mouse sulle stanze per avere le informazioni.')"/>


<area shape="rect" coords="222,93,290,288" onmouseover="writeText('Terzo piano, stanza D, metri quadri 26.58')" onmouseout="writeText('Sposta il mouse sulle stanze per avere le informazioni.')"/>





</map>

<br/>
<br/>
<p id="desc">Sposta il mouse sulle stanze per avere le informazioni. </p>
<br/>
<br/>
<br/>
<br/>
<!--//////////////////FINE TERZO PIANO/////////////////////-->

</div>
@endsection
