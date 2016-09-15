@extends('layouts.app')

@section('content')

    <h1>Details of type: {{ $type->name }}</h1>

    <div>{{ $type->name }}</div>

    <div><a href="{{ route('types.edit', $type->id) }}">Edit</a></div>

    @endsection