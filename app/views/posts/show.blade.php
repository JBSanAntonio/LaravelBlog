@extends('layouts.master')

<title>Post Show Page</title>

@section('content')

<div class = "container col-sm-12">

	<div row>
		<div class = "col-sm-4 showImage">
	{{-- conditional, if images then go to foreach; otherwise show post without images --}}
			@foreach($post->images as $image)
				<img class = "postImage" src="{{ '/' . $image->url }}">
			@endforeach
		</div>

		<div class = "col-sm-8 showPost">
			{{-- <tr><th><h1>Post Number: </h1></th><td><h4>{{$post->id}}</td></h4></tr> --}}
			<h3><strong>Post Title: </strong>{{{$post->title}}}</h3>
			<h3><strong>User Name: </strong>{{$post->user->first_name}} {{$post->user->last_name}}</h3>
			<h3><strong>Post Content: </strong><p></p><p>{{{ $post->body}}}</h3></p>
			<h3><strong>Post Created: </strong>{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h3>

			<h3><strong>Post Tags: </strong>
			@foreach($post->tags as $tag)
				{{{ $tag->name }}}
			@endforeach
			</h3>

	{{-- <a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
 --}}
 	<p></p>
	<a href="{{{action('PostsController@edit',$post->id)}}}" class="btn btn-default">Edit Post<span class = "glyphicon glyphicon-pencil"></span></a>

	<button id="delete" class="btn btn-danger">Delete Post<span class = "glyphicon glyphicon-trash"></span></button>

	{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
	{{ Form::close() }}

		</div>
		</div>
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66832743-1', 'auto');
  ga('send', 'pageview');

</script>