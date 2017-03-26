@extends('layouts.front.front')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to Laravel Blog</h1>
                <p class='lead'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque temporibus, sapiente quidem adipisci consequuntur, neque aliquid natus ducimus animi obcaecati. Non officiis aspernatur, omnis dolores recusandae dignissimos excepturi consequatur vero!</p>
                <p><a class="btn btn-primary btn-lg" href="{{ route('posts.create') }}" role="button">Create a post</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        @foreach($posts as $post)
            <div class="post">
                <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
                <em>Posted at : {{ $post->created_at }} - By : Sawers </em>
                <p>{{ $post->body }}</p>
                <a class="btn btn-primary" href="#">Read more...</a>
            </div>
        @endforeach
        </div>
        <div class="col-md-3 col-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
   
@endsection