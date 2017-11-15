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
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
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

@foreach ($tasks as $task)

<ul>
<a href="/prova_database/tasks/{{ $task->id }}">
<li>{{ $task->body }}</li>
    </a>
 @endforeach

 </ul> 
</p>

</div>
@endsection

