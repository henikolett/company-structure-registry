@extends('layouts.app')

@section('content')

    <h1>Edit type: {{ $type->name }}</h1>

    <form action="/types/{{ $type->id }}" method="post">

        <input type="hidden" name="_method" value="PUT">

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $type->name }}">
        {{csrf_field()}}

        <input type="submit" name="submit" value="Submit">

    </form>

    <form action="/types/{{ $type->id }}" method="post">

        <input type="hidden" name="_method" value="DELETE">

        {{csrf_field()}}

        <input type="submit" name="submit" value="Delete">

    </form>

@endsection