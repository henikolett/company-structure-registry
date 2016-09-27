@extends('layouts.app')

@section('breadcrumb')

    <a href="/" class="breadcrumb">Home</a>
    <a href="{{ route('types.create') }}" class="breadcrumb">Create new type</a>

@endsection

@section('content')

    <h1>Create new type</h1>

    <form action="/types" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name">
        {{csrf_field()}}

        <button class="btn waves-effect waves-light" type="submit" name="action">Create
            <i class="material-icons right">send</i>
        </button>

    </form>

    @endsection