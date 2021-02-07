@extends('layouts.main-layout')

@section('content')
    
    <h1>Typologies Home</h1>

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