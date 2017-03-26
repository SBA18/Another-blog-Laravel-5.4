@extends('layouts.front.front')

@section('title', 'Create new Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <em>Posted at : {{ $post->created_at }} - By : Sawers </em>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="col-md-3 col-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection