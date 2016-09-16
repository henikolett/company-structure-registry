@extends('layouts.app')

@section('content')

    <h1>Details of employee: {{ $employee->name }}</h1>

    <div>{{ $employee->name }}</div>

    <div>
        Working at:
        @foreach($elements as $element)

            {{ $element->name }}

        @endforeach
    </div>

    <div><a href="{{ route('employees.edit', $employee->id) }}">Edit</a></div>

@endsection