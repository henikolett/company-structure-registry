@extends('layouts.app')

@section('content')

    <h1>Details of element: {{ $element->name }}</h1>

    <div>Name: {{ $element->name }}</div>
    <div>Type: {{ $type->name }}</div>
    <br>
    <div><a class="waves-effect waves-light btn" href="{{ route('elements.edit', $element->id) }}">Edit</a></div>

    <h2>Employees</h2>
    <ul class="collection">
        @foreach($employees as $employee)

            <li class="collection-item"><a href="{{route('employees.show', $employee->id)}}">{{ $employee->name }}</a></li>

            @endforeach
    </ul>

    @endsection