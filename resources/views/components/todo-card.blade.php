@props(['todo'])
<x-card>
    <div class="flex justify-center items-center">
    <h2 class="text-2xl">
        <a href='/todos/{{$todo['id']}}'>
                {{$todo['title']}}
        </a>
    </h2>
    <p>{{$todo['description']}}</p>
    </div>
</x-card>