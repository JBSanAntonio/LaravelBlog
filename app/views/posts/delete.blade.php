@extends('layouts.master')

@section('content')

<title>Post Delete Form</title>

<h1>Delete Post Number: {{$post->id}}</h1>
{{Form::model($post, ['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]])}}

{{-- form tied to model by using the same name as in database --}}
<div class="form-group @if($errors->has('title')) has-error @endif">
	{{Form::label('title','Title:')}}
	{{Form::text('title',null,['class'=>'form-group'])}}
</div>
	
<div class="form-group @if($errors->has('body')) has-error @endif">
	{{Form::label('body', 'Body') }}
	{{Form::textarea('body', null, ['class'=>'form-group']) }}
</div>

	<button class="btn btn-primary">Delete Post</button>

{{ Form::close() }}
@stop