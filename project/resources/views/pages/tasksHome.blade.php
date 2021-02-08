@extends('layouts.main-layout') 

@section('content')
    

    <h1>Tasks Home</h1>

    <a href="{{route('task-create')}}">CREATE NEW TASK</a>
    
    <ul>
        @foreach ($tasks as $task) 
            <li>
                <a href="{{route('task-show', $task -> id)}}">
                    {{$task -> title}} 
                </a>

                <br>

                <a href="{{route('task-edit', $task -> id)}}">
                    EDIT
                </a>

                <a href="#">
                    DELETE 
                </a>
            </li>
        @endforeach
    </ul>

 

@endsection  