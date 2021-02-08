@extends('layouts.main-layout')

@section('content') 
    

    <h1>NEW TYPOLOGY</h1>

    <form action="{{ route('typology-update', $typology -> id)}}" method="POST"> 

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input name="name" type="text" value="{{$typology -> name}}">

        <br>
        
        <label for="description">Description:</label>
        <input name="description" type="text" value="{{$typology -> description}}"> 

        <br>

        
        <input type="submit" value="SAVE"> <br>
       

    </form>



@endsection