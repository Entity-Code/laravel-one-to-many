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

   

@endsection 