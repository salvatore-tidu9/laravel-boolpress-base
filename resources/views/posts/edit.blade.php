@extends('layouts.app')

@section('title', 'Modifica Post')

@section('content')

<form class="form" action="{{route('posts.update', $post -> id )}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="modello">Author:</label>
        <input type="text" class="form-control" name="author" id="author" value="{{$post -> author}}">
    </div>

    <div class="form-group">
        <label for="marca">Title:</label>
        <input type="text" class="form-control" name="title" id="title" value="{{$post -> title}}">
    </div>

    <div class="form-group">
        <label for="info">Content:</label>
        <textarea type="text" class="form-control" name="content" id="content">{{$post -> content}}</textarea>
    </div>

    <button type="submit" class="bt btn btn-default">Submit</button>
</form>

@endsection