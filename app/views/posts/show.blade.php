@extends('layouts.master')

<title>Post Show Page</title>

@section('content')

<div>
	<h1>Post Number: {{$post->id}}</h1>
	<h1>Post Title: </h1><h4>{{{$post->title}}}</h4>
	<h1>Post Content: </h1><h4>{{{ $post->body}}}</h4>
	<h1>Post Created: </h1><h4>{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h4>
</div>

<div "col-md-6">
	{{-- <a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
 --}}

	<a href="{{{action('PostsController@edit',$post->id)}}}" class="btn btn-default">Edit Post<span class = "glyphicon glyphicon-pencil"></span></a>

	<a href="{{{action('PostsController@destroy',$post->id)}}}" method="DELETE" type="button" class="btn btn-danger" onsubmit="return confirm('Are you sure to delete the customer: {{ $post->id }}')">Delete Post<span class = "glyphicon glyphicon-trash"></span></a>

</div>


@stop()