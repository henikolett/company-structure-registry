@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('employees.index') }}" class="breadcrumb">All employees</a>
    <a href="{{ route('employees.show', $employee->id) }}" class="breadcrumb">{{ $employee->name }}</a>

@endsection

@section('content')

    <h1>Details of employee: {{ $employee->name }}</h1>

    <div>Name: {{ $employee->name }}</div>
    <div>
        Currently working at:

        @foreach($elements as $element)

            {{ $element->name }},

        @endforeach
    </div>
    <div>Total: {{ $num }}</div>

    <br>

    <div><a class="waves-effect waves-light btn" href="{{ route('employees.edit', $employee->id) }}">Edit</a></div>

@endsection