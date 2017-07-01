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


@foreach ($tasks as $task)
<p>



<a href="/tasks/{{ $task->id }}"> 

{{ $task->body }}

    </a>
<br/> 

 

 
</p>
@endforeach

</div>
@endsection

