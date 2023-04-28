@props(['todo'])
<x-card>
    <h2>
        <a href='/todos/{{$todo['id']}}'>
                {{$todo['title']}}
        </a>
    </h2>
    <p>{{$todo['description']}}</p>
</x-card>