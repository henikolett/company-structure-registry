@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('types.index') }}" class="breadcrumb">All types</a>
    <a href="{{ route('types.edit', $type->id) }}" class="breadcrumb">Edit {{ $type->name }}</a>

@endsection

@section('content')

    <h1>Edit type: {{ $type->name }}</h1>

    <form action="/types/{{ $type->id }}" method="post">

        <input type="hidden" name="_method" value="PUT">

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $type->name }}">
        {{csrf_field()}}

        <button class="btn waves-effect waves-light" type="submit" name="action">Edit
            <i class="material-icons right">send</i>
        </button>

    </form>

    <br>

    <form action="/types/{{ $type->id }}" method="post">

        <input type="hidden" name="_method" value="DELETE">

        {{csrf_field()}}

        <button class="btn waves-effect waves-light" type="submit" name="action">Delete</button>

    </form>

@endsection