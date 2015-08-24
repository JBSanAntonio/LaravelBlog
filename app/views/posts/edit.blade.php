@extends('layouts.master')

@section('content')

<title>Post Edit Form</title>

<h1>Edit Post Number: {{$post->id}}</h1>

{{-- <h1>Edit: {{$post->title}}</h1>
<h2>Edit: {{$post->body}}</h2> --}}

{{Form::model($post, ['method'=>'PUT','action'=>['PostsController@update',$post->id]])}}

{{-- form tied to model by using the same name as in database --}}
<div class="form-group @if($errors->has('title')) has-error @endif">
	{{Form::label('title','Title:')}}
	{{Form::text('title',null,['class'=>'form-group'])}}
</div>
	
<div class="form-group @if($errors->has('body')) has-error @endif">
	{{Form::label('body', 'Body') }}
	{{Form::textarea('body', null, ['class'=>'form-group']) }}
</div>

	<button class="btn btn-primary">Save Edits</button>

{{ Form::close() }}
@stop