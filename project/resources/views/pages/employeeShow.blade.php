@extends('layouts.main-layout')

@section('content')
    

    <h1>Employees Show</h1>

    <h2>
        {{$employee -> name}} {{$employee -> lastname}} (name's employee)
    </h2>

    <h2>TASKS ASSOCIATED:</h2>
    <ul>           
        @foreach ($employee -> tasks as $task)
            <li>
                {{$task -> title}}
                ({{$task -> employee -> name}})
            </li>
        @endforeach              
    </ul>

    <h2>TYPOLOGIES ASSOCIATED:</h2>
    <ul>           
        @foreach ($employee -> typologies as $typology)
            <li>
                {{$typology -> name}}
            </li>
        @endforeach              
    </ul>

 

@endsection 