@extends('layouts.main-layout')

@section('content')
    

    <h1>EDIT TASK: {{ $task -> id }}</h1>

    <form action="{{ route('task-update', $task -> id) }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title:</label>
        <input name="title" type="text" value="{{ $task -> title }}">

        <br>
        

        <label for="description">Description:</label>
        <input name="description" type="text" value="{{ $task -> description}}">

        <br>
 
        <label for="priority">Priority:</label>
        <input name="priority" type="text" value="{{ $task -> priority }}">

        <br> 

        <label for="employee_id">Employee:</label>
        <select name="employee_id">

            @foreach ($employees as $employee) 

                <option value="{{$employee -> id}}"
                    @if ($task -> employee -> id == $employee -> id)
                        selected
                    @endif                
                >{{ $employee -> name }}</option>

            @endforeach
            
        </select>

        <br><br>

        @php
            //dd($task -> typologies);
        @endphp

        <label for="typologies[]">Typologies</label> <br>
        @foreach ($typologies as $typology)

            {{-- abbiamo un iesima tipologia presa da tutte le tipologie nella tabella tipologie --}}
            <input 
                type="checkbox" 
                name="typologies[]" {{--  per la selezione multipla (ritorna l'array delle typs selezionate) --}}
                type="checkbox" 
                value="{{ $typology -> id }}"
                {{-- verifichiamo se nella tipologia iesima sia contenuto l'id di una delle tipologie associate al task (cliccate dall'utente) --}}
                @if ($task -> typologies -> contains($typology -> id))
                    checked
                @endif
            >
                    {{ $typology -> name }}
            <br>
        @endforeach

        <input type="submit" value="SAVE">

    </form>


@endsection