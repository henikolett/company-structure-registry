@extends('layouts.app')

@section('content')

    <h1 class="header">Create new element</h1>

        <form action="/elements" method="post">

                <div class="input-field">
                    <input type="text" name="name" placeholder="Enter name">
                    <label for="name" class="active">Name</label>
                </div>
                {{csrf_field()}}

                <div class="input-field">

                        <select  name="parent_id" id="parent_id">

                            <option value="0">None</option>

                            @foreach($elements as $element)

                                <option value="{{ $element->id }}">{{ $element->name }}</option>

                            @endforeach

                        </select>
                        <label for="parent_id" class="active">Parent</label>


                </div>


                <div class="input-field">
                    <select name="type_id" id="type_id">

                        @foreach($types as $type)

                            <option value="{{ $type->id }}">{{ $type->name }}</option>

                        @endforeach

                    </select>
                    <label for="type_id" class="active">Type</label>
                </div>


                <button class="btn waves-effect waves-light" type="submit" name="action">Create
                    <i class="material-icons right">send</i>
                </button>


        </form>

    @endsection