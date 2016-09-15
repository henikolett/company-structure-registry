@extends('layouts.app')

@section('content')

    <h1>Create new element</h1>

    <form action="/elements" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name">
        {{csrf_field()}}

        <label for="parent_id">Parent</label>
        <select name="parent_id" id="parent_id">

            <option value="0">None</option>

            @foreach($elements as $element)

                <option value="{{ $element->id }}">{{ $element->name }}</option>

                @endforeach

        </select>

        <label for="type_id">Type</label>
        <select name="type_id" id="type_id">

            @foreach($types as $type)

                <option value="{{ $type->id }}">{{ $type->name }}</option>

                @endforeach

        </select>

        <input type="submit" name="submit" value="Create">

    </form>

    @endsection