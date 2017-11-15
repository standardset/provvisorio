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

<li>
   <a href="/prova_database/{{ $task->id }}">
   {{ $task->body }}
    </a>
    </li>
   
 @endforeach

 </ul> 
</p>

</div>
@endsection

