@extends('layouts.master')
<head>
	<title>Home Page</title>
</head>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66832743-1', 'auto');
  ga('send', 'pageview');

</script>

@section('content')

	
	<h2 class = "introLine1">		
		Share your own travel experiences with others
	</h2>
	<h2 class = "OR">
		<p></p>
		OR
		<p></p>
	</h2>
	<h2 class = "introLine2">
		Getaway without worry, cost, or stress
	</h2>

<hr>

<h3>
<ul>
	<li class = "homeBullets">
		Visit to escape the mundane. View exotic and exciting destinations near and far. 
	</li>

	<hr>

	<li class = "homeBullets">
		Signup now to start posting about your trip.
		{{-- No need to struggle with airports and transfers or max out your credit card.  --}}
	</li>
</ul>
</h3>

<hr>
	<h3 class = "homeBonVoyage">
	Bon Voyage! 
	</h3>
	

@stop
