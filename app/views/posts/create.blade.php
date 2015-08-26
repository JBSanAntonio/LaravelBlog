@extends('layouts.master')

<title>Post Create Form</title>


@section('content')

<h1>Create Post <em>(must be logged in to post)</em></h1>

{{-- uses token control option below to prevent Cross Site Request Forgery (CSRF) attacks --}}

{{ Form::open(array('action' => 'PostsController@store')) }}

	<div class="form-group" @if($errors->has('title')) has-error @endif">
		{{Form::label('title', 'Title') }}
		{{Form::text('title') }}
	<div class="form-group" @if($errors->has('body')) has-error @endif">
		{{Form::label('body', 'Body') }}
		{{Form::textarea('body') }}
	</div>

<div class="form-group">
    {{ Form::submit('Save New Post', 
      array('class'=>'btn btn-primary')) }}
</div>
	
{{ Form::close() }}

@stop

















