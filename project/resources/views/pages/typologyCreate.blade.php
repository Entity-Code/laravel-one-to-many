@extends('layouts.main-layout')

@section('content')
    

    <h1>NEW TYPOLOGY</h1>

    <form action="{{ route('typology-store') }}" method="POST"> 

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input name="title" type="text">

        <br>
        
        <label for="description">Description:</label>
        <input name="description" type="text"> 

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

        
        <label for="tasks[]">Tasks:</label> <br>
        {{-- mi ritorno un array di tasks (quelle selezionate dall'utente), per poi lavorarmelo nel controller (vedere in store) --}}
            @foreach ($tasks as $task)
                <input 
                    name="tasks[]" 
                    type="checkbox" 
                    value="{{$task -> id}}"> 
                        
                        ({{$task -> id}}) {{ $task -> title}}

                    <br>
            @endforeach
        
         <br><br>
        
        <input type="submit" value="SAVE"> <br>
       

    </form>



@endsection