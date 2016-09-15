@extends('layouts.app')

@section('content')

    <h1>All types</h1>

    <ul>

        @foreach($types as $type)

            <li><a href="{{ route('types.show', $type->id) }}">{{ $type->name }}</a></li>

            @endforeach

    </ul>

    @endsection