@extends('layouts.main-layout')

@section('content')
    

    <h1>Employees Home</h1> 

    <ul>
        @foreach ($employees as $employee) 
            <li>
                <a href="{{route('emp-show', $employee -> id)}}">
                    {{$employee -> name}}
                    {{$employee -> lastname}}
                </a>

                <h5>TASKS:</h5>
                <ul>
                    @foreach ($employee -> tasks as $task)
                        <li>
                            {{$task -> title}}
                            ({{$task -> employee -> name}})
                        </li>
                    @endforeach 
                </ul>
            </li>
        @endforeach
    </ul>
     

 

@endsection 