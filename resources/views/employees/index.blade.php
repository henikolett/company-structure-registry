@extends('layouts.app')

@section('content')

    <h1>All employees</h1>

    <ul>

        @foreach($employees as $employee)

            <li>
                <a href="{{ route('employees.show', $employee->id) }}">{{ $employee->name }}</a>
            </li>

        @endforeach

    </ul>

@endsection