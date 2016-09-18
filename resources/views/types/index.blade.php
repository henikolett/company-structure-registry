@extends('layouts.app')

@section('content')

    <h1>All types</h1>

    <ul class="collection">

        @foreach($types as $type)

            <li class="collection-item"><a href="{{ route('types.show', $type->id) }}">{{ $type->name }}</a></li>

            @endforeach

    </ul>

    @endsection