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
                <option value="{{$employee -> id}}">{{ $employee -> name }}</option>
            @endforeach
            

        </select>

        <br>

        <input type="submit" value="SAVE">

    </form>


@endsection