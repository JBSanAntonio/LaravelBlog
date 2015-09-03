@extends('layouts.master')

<title>Edit Posts</title>

@section('content')

<h1>Edit Post Number: {{$post->id}}</h1>

{{-- uses token control option below to prevent Cross Site Request Forgery (CSRF) attacks --}}

{{ Form::model($post, ['method'=>'PUT','action'=>['PostsController@update', $post->id]]) }}

		{{-- form tied to model by using the same name as in database --}}
		<div class="form-group @if($errors->has('title')) has-error @endif">
			{{ Form::label('title','Title:') }}
			{{ Form::text('title',null,['class'=>'form-group']) }}
		</div>
			
		<div class="form-group @if($errors->has('body')) has-error @endif">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', null, ['class'=>'form-group']) }}
		</div>

		<div class="form-group" @if($errors->has('image_title')) has-error @endif">
			{{Form::label('image_title', 'ImageTitle') }}
			{{Form::text('image_title') }}         
	    </div>
		<div class="form-group" @if($errors->has('image')) has-error @endif">
			{{Form::label('image', 'image') }}
			{{Form::file('image') }}         
	    </div>

			<h3><strong>Post Tags: </strong></h3>
					@foreach($post->tags as $tag)
						{{{ $tag->name }}}
					@endforeach

		<div class="form-group tags" @if($errors->has('tags')) has-error @endif"><strong>Tags: </strong>
			<input name="tag_list" id="tags" class="tags" value="{{{ $post->tagString }}}">
		</div>


		<script>/*$('#tags').addTag('');*/

			$(document).ready(function(){
				$('#tags').tagsInput();
			});

		</script>

		<button class="btn btn-primary">Save Edits</button>

{{ Form::close() }}
@stop

