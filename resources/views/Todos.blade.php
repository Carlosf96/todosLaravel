<h1>{{$heading}}</h1>
@foreach($todos as $todo)
    <h2>{{$todo['title']}}</h2>
    <p>{{$todo['description']}}</p>
@endforeach