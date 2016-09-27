@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('types.index') }}" class="breadcrumb">All types</a>

@endsection

@section('content')

    <h1>All types</h1>

    <ul class="collection">

        @foreach($types as $type)

            <li class="collection-item"><a href="{{ route('types.show', $type->id) }}">{{ $type->name }}</a></li>

            @endforeach

    </ul>

    @endsection