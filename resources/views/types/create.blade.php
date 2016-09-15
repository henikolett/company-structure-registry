@extends('layouts.app')

@section('content')

    <h1>Create new type</h1>

    <form action="/types" method="post">

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name">
        {{csrf_field()}}

        <input type="submit" name="submit" value="Submit">

    </form>

    @endsection