@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('elements.index') }}" class="breadcrumb">All elements</a>
    <a href="{{ route('elements.show', $element->id) }}" class="breadcrumb">{{ $element->name }}</a>

@endsection

@section('content')

    <h1>Details of element: {{ $element->name }}</h1>

    <div>Name: {{ $element->name }}</div>
    <div>Type: {{ $type->name }}</div>
    <br>
    <div><a class="waves-effect waves-light btn" href="{{ route('elements.edit', $element->id) }}">Edit</a></div>

    @if(count($employees) > 0)

        <h2>Employees</h2>
        <ul class="collection">
            @foreach($employees as $employee)

                <li class="collection-item"><a href="{{route('employees.show', $employee->id)}}">{{ $employee->name }}</a></li>

                @endforeach
        </ul>

    @else
        <br /><div>No employees</div>

    @endif

    @endsection