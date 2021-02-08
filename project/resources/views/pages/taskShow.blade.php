@extends('layouts.main-layout')

@section('content')
    
    <h1>TASK {{$task -> title}} DETAILS ({{$task -> id}})</h1>
    <p><strong>Description:</strong> {{$task -> description}}</p>


    <h3>EMPLOYEE ASSOCIATED</h3>
    <ul>
        <li>{{ $task -> employee -> name}}</li>
        <li>{{ $task -> employee -> lastname}}</li>
        <li>{{ $task -> employee -> dateOfBirth}}</li>
    </ul>
    
    

@endsection  