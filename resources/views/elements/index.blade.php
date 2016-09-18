@extends('layouts.app')

@section('content')

    <h1>All elements</h1>

    <ul class="collection">

        @foreach($elements as $element)

            <li class="collection-item"><a href="{{ route('elements.show', $element->id) }}">{{ $element->name }}</a></li>

        @endforeach

    </ul>

@endsection