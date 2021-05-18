@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif    

    <div class="title text-center">
        <h2>Latest Posts</h2>
    </div>
    <div class="container-fluid main_post_container">
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-xs-12">
                <div class="post_container">
                    <h4>{{$post['author']}}</h4>
                    <h6>{{$post['title']}}</h6>
                    <p>{{$post['content']}}</p>
                    <a href="{{ route('posts.show', ['post' => $post -> id]) }}" type="button" class="btn_i btn btn-info">Dettagli</a>
                </div>
                <div class="row text-center">
                    <a href="{{ route('posts.edit', ['post' => $post -> id]) }}" type="button" class="btn_w btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', ['post' => $post -> id]) }}" method="post" class="form_d">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn_d btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row text-center">
            <a href="{{route('posts.create')}}" class="btn_p btn btn-primary">Aggiungi Post</a>
        </div>
    </div>

@endsection
