@extends('layouts.master')

<title>Show All Posts</title>

@section('content')

<h1>Blog Posts</h1>

{{-- below gives message for all errors in the $validator array in the PostsController.php file --}}

{{-- $posts = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->get(); --}}
    
<iframe class="panoramio"
   src="http://www.panoramio.com/wapi/template/list.html?tag=travel&amp;width=900&amp;height=250&amp;columns=12&amp;rows=3&amp;orientation=horizontal"
   frameborder="0" width="900" height="250" scrolling="no" marginwidth="0" marginheight="0">
</iframe>

	@foreach($posts as $post)
	<h3><strong>Post Title: {{{$post->title}}}</strong></h3>

	<h4><strong>Posted By: </strong>{{$post->user->first_name}} {{$post->user->last_name}}</h4>

	<h5><strong>Post Content: </strong>{{{Str::words($post->body, 20) }}}</h5>

	<h5><strong>Post Created: </strong>{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}</h5>

	<h5><strong>Post Tags: </strong>

		@foreach($post->tags as $tag)
			{{{ $tag->name }}}
		@endforeach
	 </h5>

	{{-- <h5 class = "postImage">Post Image: {{{Str::words($post->image, 20) }}}</h5> --}}

	<a href="{{{action('PostsController@show', $post->id)}}}">Read Post</a>
	@endforeach

{{-- <iframe
   src="http://www.panoramio.com/wapi/template/list.html?tag=travel&amp;width=900&amp;height=250&amp;columns=10&amp;rows=1&amp;orientation=horizontal"
   frameborder="0" width="900" height="250" scrolling="no" marginwidth="0" marginheight="0">
</iframe>
 --}}

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

 




