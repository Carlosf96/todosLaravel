@extends('layout')

@section('content')
@include('partials._search')

<h1>{{$heading}}</h1>

@if(count($todos) == 0)
    <h2>No todos pending</h2>
@endif

@foreach($todos as $todo)
    <x-todo-card :todo="$todo" />
@endforeach

@endsection