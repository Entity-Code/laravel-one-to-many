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

                <br>

                <a href="{{route('typology-edit', $typology -> id)}}">EDIT</a>
                <a href="{{route('typology-delete', $typology -> id )}}">DELETE</a>

            </li>
            
            <br>


        @endforeach 
    </ul>


@endsection 