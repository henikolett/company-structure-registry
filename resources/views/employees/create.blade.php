@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('employees.create') }}" class="breadcrumb">Create new employee</a>

@endsection

@section('content')

    <h1>Create new employee</h1>

    <form action="/employees" method="post">

        <label for="name" class="active">Name</label>
        <input type="text" name="name" placeholder="Enter name">
        {{csrf_field()}}

        <label for="element_id" class="active">Where does he/she work?</label>
        <select name="element_id" id="element_id">

            @foreach($elements as $element)

                <option value="{{ $element->id }}">{{ $element->name }}</option>

            @endforeach

        </select>

        <button class="btn waves-effect waves-light" type="submit" name="action">Create
            <i class="material-icons right">send</i>
        </button>

    </form>

@endsection