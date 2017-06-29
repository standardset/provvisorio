@extends('elle.base')

@section('prova_database')

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div>

<h1 class="titolo_pagina">
I responsabili per settore
</h1>

<p>

<?php foreach ($tasks as task) : ?>

<ul>
<li><?= $task;?> </li>
<?php endforeach;?>

 </ul> 
</p>

</div>
@endsection

