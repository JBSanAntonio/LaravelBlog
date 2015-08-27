@extends('layouts.master')

<title>Show All Posts</title>

@section('content')

<h1>Blog Posts</h1>

	{{ $posts->links() }}

{{-- below gives message for all errors in the $validator array in the PostsController.php file --}}

{{-- $posts = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->get(); --}}

	@foreach($posts as $post)
	<h3><strong>Post Title: {{{$post->title}}}</strong></h3>

	<h4>Posted By: {{$post->user->first_name}} {{$post->user->last_name}}</h4>

	<h5>Post Created: {{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h5>

	<h5>Post Content: {{{Str::words($post->body, 20) }}}</h5>

	{{-- <h5>Post Image: {{{Str::words($post->image, 20) }}}</h5> --}}

	<a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
	@endforeach

@stop









