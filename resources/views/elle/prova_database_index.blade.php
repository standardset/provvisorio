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
<br/>
<p>

@foreach ($tasks as $task)

<a href="prova_database/tasks/{{ $task->id }}"> 

{{ $task->body }}

    </a>
<br/> 

 @endforeach

 
</p>

</div>
@endsection

