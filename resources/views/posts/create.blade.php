@extends('layouts.front.front')

@section('title', 'Create new Post')

@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=>'']) !!}
                {{ Form::label('title', 'Title : ') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required'=>'')) }}

                {{ Form::label('body', 'Content : ') }}
                {{ Form::textarea('body', null, array('class' => 'form-control', 'required'=>'', 'minlength'=>'10')) }}
                {{ Form::submit('Create Post', array('class'=>'btn btn-success btn-lg','style'=>'margin-top: 20px')) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection