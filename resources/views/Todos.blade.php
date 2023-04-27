@extends('layout')

@section('content')
@include('partials._search')

<h1>{{$heading}}</h1>
@if(count($todos) == 0)
<h2>No todos pending</h2>
@endif

@foreach($todos as $todo)
    <h2>
        <a href='/todos/{{$todo['id']}}'>
             {{$todo['title']}}
        </a>
    </h2>
    <p>{{$todo['description']}}</p>
@endforeach

@endsection