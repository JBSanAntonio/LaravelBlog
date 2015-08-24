@extends('layouts.master')

<title>Show All Posts</title>

@section('content')

<h1>Blog Posts</h1>

	{{ $posts->links() }}


{{-- below gives message for all errors in the $validator array in the PostsController.php file --}}

	@foreach($posts as $post)
	<h3>Post Title {{{$post->title}}}</h3>
	<a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
	@endforeach

@stop









