@extends('layouts.main-layout')

@section('content')
    

    <h1>EDIT TASK: {{ $task -> id }}</h1>

    <form action="{{ route('task-store') }}" method="POST">

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
                    @if ($task -> employee  -> id == $employee -> id)
                        selected
                    @endif                
                >{{ $employee -> name }}</option>

            @endforeach
            
        </select>

        <br>

        <input type="submit" value="SAVE">

    </form>


@endsection