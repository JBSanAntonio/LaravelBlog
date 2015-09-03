@extends('layouts.master')

<title>Show All Posts</title>

@section('content')

<h1>Blog Posts</h1>

	{{ $posts->links() }}

	{{-- <div row class = "col-md-12 postImage">

		<div class = "showPost col-md-8">  --}}

			@foreach($posts as $post)
			<h3><strong>Post Title: {{{$post->title}}}</strong></h3>

			<h4><strong>Posted By: </strong>{{$post->user->first_name}} {{$post->user->last_name}}</h4>

			<h5><strong>Post Content: </strong>{{{Str::words($post->body, 10) }}}</h5>

			<h5><strong>Post Created: </strong>{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h5>

			<h5><strong>Post Tags: </strong>

				@foreach($post->tags as $tag)
					{{{ $tag->name }}}
				@endforeach
	 		</h5>
				<a href="{{{ action('PostsController@show'), $post->id }}}"><h3><strong>Read Post</strong></h3></a>
	 	</div>
	
		{{-- <div class = "showImage col-md-4"> --}}

				<h5 class = "allPostsImage"></h5>

					@foreach($post->images as $image)
							<img class = "postImage" src="{{ '/' . $image->url }}">
						@endforeach

				@endforeach
	 	</div>
	</div>


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








