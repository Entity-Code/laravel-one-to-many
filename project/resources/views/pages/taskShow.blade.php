@extends('layouts.main-layout')

@section('content')
    

    <h1>{{$task -> title}}({{$task -> id}})</h1> 
    <ul>
        <li>{{ $task -> employee -> name}}</li>
        <li>{{ $task -> employee -> lastname}}</li>
        <li>{{ $task -> employee -> dateOfBirth}}</li>
    </ul>
    
    

@endsection  