@extends('layout')

@section('content')
    <h1 class="Title">Edit</h1>
    <form method="POST" action="/projects/{{$project->id}}">

        {{method_field('PATCH')}}

        {{csrf_field()}}
        <div class="field">
            <label for="title" class="label">Titles</label>
            <div class="control">
                <input name="title" type="text" class="input" placeholder="Title" value="{{$project->title}}">
            </div>

        </div>


        <div class="field">
            <label for="description" class="label">Titles</label>
            <div class="control">
                <textarea name="description" class="textarea" placeholder="Description">{{$project->description}}</textarea>
            </div>

        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>

        </div>
    </form>

@endsection