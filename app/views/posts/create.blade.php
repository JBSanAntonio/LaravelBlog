@extends('layouts.master')

<title>Post Create Form</title>


@section('content')

<h1>Create Post</h1>

{{-- uses token control option below to prevent Cross Site Request Forgery (CSRF) attacks --}}

{{-- FORMER CODE FOR FORM WITHOUT IMAGE BELOW...

{{-- ANOTHER OPTION FOR CODING FORM WITH IMAGES
{{ Form::open(array('url' => '/upload','files' => true, 'action' => 'PostsController@store')) }}
{{ Form::open(array('url'=>'/images/save','role'=>'form','files'=> true, 'action' => 'PostsController@store')) }}
 --}}

	{{ Form::open(array('action' => 'PostsController@store', 'files'=>true)) }}
		<div class="form-group" @if($errors->has('title')) has-error @endif">
			{{Form::label('title', 'Title') }}
			{{Form::text('title') }}
		<div class="form-group" @if($errors->has('body')) has-error @endif">
			{{Form::label('body', 'Body') }}
			{{Form::textarea('body') }}
		</div>

{{-- NEW code below for image in form --}}
		<div class="form-group" @if($errors->has('image_title')) has-error @endif">
			{{Form::label('image_title', 'ImageTitle') }}
			{{Form::text('image_title') }}         
	    </div>
		<div class="form-group" @if($errors->has('image')) has-error @endif">
			{{Form::label('image', 'image') }}
			{{Form::file('image') }}         
	    </div>
{{-- HTML tag option - alternative to putting images/save in Form::open(array... above) --}}
{{-- <form action="/images/save" method="post" enctype="multipart/form-data"> --}}
		<div class="form-group">
		    {{ Form::submit('Save New Post', 
		      array('class'=>'btn btn-primary')) }}
		</div>
	
{{ Form::close() }}

@stop

















