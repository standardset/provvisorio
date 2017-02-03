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

<p>Terzo piano</p>
<br/>
<img src="img/locali_terzo_piano.svg" alt=""  width="300px" height="*" usemap="#terzo_piano"/>
<map name="terzo_piano">
<area shape="rect" coords="0,90,95,300" href="" alt="Terzo piano, stanza A" title="Terzo piano, stanza A" onmouseover="writeText('Terzo piano, stanza A, metri quadri 55')" onmouseout="writeText('Sposta il mouse sulle stanze per avere le informazioni.')">
  
</map>
<br/>
<p id="desc">Sposta il mouse sulle stanze per avere le informazioni. </p>
<br/>
<br/>
<br/>
<br/>


</div>
@endsection
