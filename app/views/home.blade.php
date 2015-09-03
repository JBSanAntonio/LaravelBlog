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

	
	<h2 class = "introLine">		
		Getaway OR Share 
	</h2>

	<h3 class = "secondLine">
			without worry, cost, or stress
	</h3>

<hr>

<h3>
<ul class = "homeList">
	<li class = "homeList1">
		Visit to escape the mundane
	</li>

	<li class = "homeList2">
		View exotic and exciting destinations near and far 
	</li>

	<li class = "homeList3">
		Signup now to start posting about your trip
		{{-- No need to struggle with airports and transfers or max out your credit card.  --}}
	</li>
</ul>
</h3>

<hr>
	<h3 class = "homeBonVoyage">
	Bon Voyage! 
	</h3>
	

@stop
