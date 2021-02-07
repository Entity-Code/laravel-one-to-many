@extends('layouts.main-layout')

@section('content')
    
    <h1>Typologies Show</h1>

    <ul>
        <li>
            <strong>Name:</strong> {{$typology -> name}} 
        </li>
        <li>
            <strong>Description:</strong> {{$typology -> description}} 
        </li>
    </ul>

    
    <h2>EMPLOYEES ASSOCIATED</h2>
    <ul>
        @foreach ($typology -> employees as $employee)
            <li>
                <strong>Name:</strong> {{$employee -> name}}
                {{$employee -> lastname}} <br>
                <strong>Date Of Birth:</strong> {{$employee -> dateOfBirth}} <br>
            </li>                     
        @endforeach
    </ul>
   
    <h2>TASKS ASSOCIATED</h2>
    <ul>
        @forelse ($employee -> tasks as $task)
            <li>             
                <strong>Name:</strong> {{$task -> title}} <br>
                <strong>Description:</strong> {{$task -> description}} <br>     
                <strong>Priority: </strong> {{$task -> priority}}  
            </li>   
        @empty
            <big>Not Available.</big>
        @endforelse
    </ul>
   

@endsection 