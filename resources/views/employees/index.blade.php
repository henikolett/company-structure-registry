@extends('layouts.app')

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