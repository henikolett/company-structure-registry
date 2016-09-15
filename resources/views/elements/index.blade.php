@extends('layouts.app')

@section('content')

    <h1>All elements</h1>

    <ul>

        @foreach($elements as $element)

            <li><a href="{{ route('elements.show', $element->id) }}">{{ $element->name }}</a></li>

        @endforeach

    </ul>

@endsection