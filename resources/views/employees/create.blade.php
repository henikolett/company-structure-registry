@extends('layouts.app')

@section('content')

    <h1>Create new employee</h1>

    <form action="/employees" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name">
        {{csrf_field()}}

        <label for="element_id">Where does he/she work?</label>
        <select name="element_id" id="element_id">

            @foreach($elements as $element)

                <option value="{{ $element->id }}">{{ $element->name }}</option>

            @endforeach

        </select>

        <input type="submit" name="submit" value="Create">

    </form>

@endsection