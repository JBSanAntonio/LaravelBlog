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


	{{-- TO DO: ADD TAGS TO INDEX PAGE --}}

	

@stop

{{-- http://stackoverflow.com/questions/28051899/undefined-variable-image-laravel CODE FOR IMAGES ON VIEW PAGE --}}

{{-- <ul>
    @foreach($image as $images)
      <li>{{$images->image_name}}</li>
    @endforeach
</ul> --}}


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66832743-1', 'auto');
  ga('send', 'pageview');

</script>








