@extends('layouts.main-layout')

@section('content')
    

    <h1>NEW TASK</h1>

    <form action="{{ route('task-store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="title">Title:</label>
        <input name="title" type="text">

        <br>
        

        <label for="description">Description:</label>
        <input name="description" type="text">

        <br>

        <label for="priority">Priority:</label>
        <input name="priority" type="text"> 

        <br>

        <label for="employee_id">Employee:</label>

        <select name="employee_id">
            @foreach ($employees as $employee)

                <option value="{{$employee -> id}}">
                    {{ $employee -> name }}
                    {{ $employee -> lastname }}  
                </option>

            @endforeach  
        </select>

        <br>

        
        <label for="typologies[]">Typologies:</label> <br>
        {{-- mi ritorno un array di typologies (quelle selezionate dall'utente), per poi lavorarmelo nel controller (vedere in store) --}}
            @foreach ($typologies as $typology)

                <input name="typologies[]" 
                type="checkbox" 
                value="{{$typology -> id}}"> 

                    {{ $typology -> name}} 
                <br>
                
            @endforeach
        
        <br><br>
        
        <input type="submit" value="SAVE"><br>
        

    </form>


@endsection