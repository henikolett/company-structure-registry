@extends('layouts.app')

@section('content')

    <h1>Details of element: {{ $element->name }}</h1>

    <div>{{ $element->name }}</div>

    <div><a href="{{ route('elements.edit', $element->id) }}">Edit</a></div>

    @endsection