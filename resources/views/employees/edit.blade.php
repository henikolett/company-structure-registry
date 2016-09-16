@extends('layouts.app')

@section('content')

    <h1>Edit employee: {{ $employee->name }}</h1>

    <form action="/employees/{{ $employee->id }}" method="post">

        <input type="hidden" name="_method" value="PUT">

        {{csrf_field()}}

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $employee->name }}">

        <label for="element_id">Add element</label>
        <select name="element_id" id="element_id">

            <option value="0">None</option>

            @foreach($elements as $element)

                <option value="{{ $element->id }}">{{ $element->name }}</option>

            @endforeach

        </select>

        <h3>Working at:</h3>
        <ul>
            @foreach($employee_elements as $employee_element)

                <li> {{ $employee_element->name }} </li>

                @endforeach
        </ul>

        <input type="submit" name="submit" value="Update">

    </form>

    <form action="/employees/{{ $employee->id }}" method="post">

        <input type="hidden" name="_method" value="DELETE">

        {{csrf_field()}}

        <input type="submit" name="delete" value="Delete">

    </form>

@endsection