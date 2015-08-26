@extends('layouts.master')

<title>Post Show Page</title>

@section('content')

<div>
	<table>
		<th><h1>Selected Post</h1></th>
		{{-- <tr><th><h1>Post Number: </h1></th><td><h4>{{$post->id}}</td></h4></tr> --}}
		<tr><th><h2>Post Title: </h2></th><td><h4>{{{$post->title}}}</h4></td></tr>
		<tr><th><h2>User Name: </h2></th><td><h4>{{$post->user->first_name}} {{$post->user->last_name}}</h4></td></tr>
		<tr><th><h2>Post Content: </h2></th><td><h4>{{{ $post->body}}}</h4></td></tr>
		<tr><th><h2>Post Created: </h2></td><td><h4>{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h4></td></tr>
	</table>
</div>

<div "col-md-6">
	{{-- <a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
 --}}

	<a href="{{{action('PostsController@edit',$post->id)}}}" class="btn btn-default">Edit Post<span class = "glyphicon glyphicon-pencil"></span></a>

	<button id="delete" class="btn btn-danger">Delete Post<span class = "glyphicon glyphicon-trash"></span></button>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
	{{ Form::close() }}

</div>

	<script type="text/javascript">
		"use strict";

		$('#delete').on('click', function(){

			var onConfirm = confirm('Are you sure you want to delete this post? There is no turning back!');

			if(onConfirm) {
				$('#formDelete').submit();
			}
		});

	</script>

@stop