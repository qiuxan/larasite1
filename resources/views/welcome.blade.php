@extends('layout')

@section('content')

    <h1>{{$foo}} My first website</h1>

    <ul>

        @foreach ($task as $task)


            <li>{{$task}}</li>

        @endforeach
    </ul>
@endsection