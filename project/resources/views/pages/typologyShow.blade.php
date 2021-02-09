@extends('layouts.main-layout')

@section('content')
    
    <h1>Typologies Show</h1>

    
    <ul>
        <li>
            <strong>Name:</strong> {{$typology -> name}} 
        </li>
        <li>
            <strong>Description:</strong> {{$typology -> description}}

            <h2>tasks</h2>
            @foreach ($typology -> tasks as $task)
                <strong>{{$task -> title}}</strong> <br>
            @endforeach
            

        </li>
    </ul>

   

@endsection 