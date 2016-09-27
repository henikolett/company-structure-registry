@extends('layouts.app')

@section('content')

    <h1>Details of type: {{ $type->name }}</h1>

    <div>Name: {{ $type->name }}</div>
    <br>
    <div><a class="waves-effect waves-light btn" href="{{ route('types.edit', $type->id) }}">Edit</a></div>

    @if(count($elements) > 0)

        <h2>Elements</h2>

        <ul class="collection">

            @foreach($elements as $element)

                <li class="collection-item"><a href="{{route('elements.show', $element->id)}}"> {{ $element->name }} </a></li>

                @endforeach

        </ul>

    @else

        <br /><div>No elements</div>

    @endif




        






    @endsection