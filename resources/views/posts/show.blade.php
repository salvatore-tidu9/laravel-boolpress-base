@extends('layouts.app')

@section('title', 'Dettagli Post')

@section('content')

    <div class="title">
        <h2>Dettagli Post</h2>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="details_container">
                        <h5>{{$post['id']}}</h5>
                        <h6>Created at: {{$post['created_at']}}</h6>
                        <h6>Updated at: {{$post['updated_at']}}</h6>
                        <h5>Author: {{$post['author']}}</h5>
                        <h5>Title: {{$post['title']}}</h5>
                        <p>Content: {{$post['content']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection