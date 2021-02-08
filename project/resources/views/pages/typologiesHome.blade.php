@extends('layouts.main-layout')

@section('content')
    
    <h1>Typologies Home</h1>

    <a href="{{route('typology-create')}}">CREATE NEW TYPOLOGIES</a>

    <ul>
        @foreach ($typologies as $typology)

            <li>
                <a href="{{route('typology-show', $typology -> id)}}">
                    {{$typology -> name}}
                </a>
            </li>
            
            <br>


        @endforeach 
    </ul>


@endsection 