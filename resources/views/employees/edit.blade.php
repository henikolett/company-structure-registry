@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('employees.index') }}" class="breadcrumb">All employees</a>
    <a href="{{ route('employees.edit', $employee->id) }}" class="breadcrumb">Edit {{ $employee->name }}</a>

@endsection

@section('content')

    <h1>Edit employee: {{ $employee->name }}</h1>

        <form action="/employees/{{ $employee->id }}" method="post">

                <input type="hidden" name="_method" value="PUT">

                {{csrf_field()}}

                <div class="input-field">
                    <input type="text" name="name" value="{{ $employee->name }}">
                    <label for="name" class="active">Name</label>
                </div>

                <div class="input-field">
                    <select name="element_id" id="element_id">

                        <option value="0">None</option>

                        @foreach($elements as $element)

                            <option value="{{ $element->id }}">{{ $element->name }}</option>

                        @endforeach

                    </select>
                    <label for="element_id" class="active">Add element</label>
                </div>

                <br>

                <div>Working at:</div>
                <ul class="collection">
                    @foreach($employee_elements as $employee_element)

                        <li class="collection-item"> {{ $employee_element->name }} </li>

                    @endforeach
                </ul>

                <button class="btn waves-effect waves-light" type="submit" name="action">Edit
                    <i class="material-icons right">send</i>
                </button>


        </form>

        <br>

        <form action="/employees/{{ $employee->id }}" method="post">

            <input type="hidden" name="_method" value="DELETE">

            {{csrf_field()}}

            <button class="btn waves-effect waves-light" type="submit" name="action">Delete
            </button>

        </form>

@endsection