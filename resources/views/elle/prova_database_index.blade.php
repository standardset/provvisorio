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
Tutti gli eventi
</h1>

<p>

@foreach ($tasks as $task)

{{ $task->body }}

 @endforeach

 
</p>

</div>
@endsection

