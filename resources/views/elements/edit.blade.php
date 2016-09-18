@extends('layouts.app')

@section('content')

    <h1>Edit element: {{ $element->name }}</h1>

    <form action="/elements/{{ $element->id }}" method="post">

        <input type="hidden" name="_method" value="PUT">

        {{csrf_field()}}

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $element->name }}">

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

        <br>

        <button class="btn waves-effect waves-light" type="submit" name="action">Edit
            <i class="material-icons right">send</i>
        </button>

    </form>

    <br>

    <form action="/elements/{{ $element->id }}" method="post">

        <input type="hidden" name="_method" value="DELETE">

        {{csrf_field()}}

        <button class="btn waves-effect waves-light" type="submit" name="action">Delete</button>

    </form>

    @endsection