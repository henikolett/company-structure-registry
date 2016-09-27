@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('employees.index') }}" class="breadcrumb">All employees</a>

@endsection

@section('content')

    <h1>All employees</h1>

    <ul class="collection">

        @foreach($employees as $employee)

            <li class="collection-item">
                <a href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a>
            </li>

        @endforeach

    </ul>

@endsection