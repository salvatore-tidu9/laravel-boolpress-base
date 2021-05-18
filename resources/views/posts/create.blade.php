@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            @if ($errors->any())
                <div class="alrt alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>

<form class="form" action="{{route('posts.store')}}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" name="author" id="author" value={{old('author')}}>
    </div>

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title" id="title" value={{old('title')}}>
    </div>

    <div class="form-group">
        <label for="content">Content:</label>
        <textarea type="text" class="form-control" name="content" id="content" value={{old('content')}}></textarea>
    </div>

    <button type="submit" class="bt btn btn-default">Submit</button>
</form>

@endsection