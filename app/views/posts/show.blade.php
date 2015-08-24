@extends('layouts.master')

<title>Post Show Page</title>

@section('content')

<div>
	<h1>Post Title: </h1><h4>{{{$post->title}}}</h4>
	<h1>Content: </h1><h4>{{{ $post->body}}}</h4>
</div>

<div "col-md-6">
	{{-- <a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
 --}}

	<a href="{{{action('PostsController@edit',$post->id)}}}" class="btn btn-default">Edit Post<span class = "glyphicon glyphicon-pencil"></span></a>
</div>


@stop()