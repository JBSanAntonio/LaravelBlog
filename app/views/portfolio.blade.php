@extends('layouts.resume-portfolio-master')

@section('title')
    <title>Portfolio</title>


@section('content')


<h1 class="portfolioCover">

<a href="{{{ action('HomeController@showPortfolioTwo') }}}">View The PORTFOLIO</a></h1>
{{-- <h2>
VIEW MY 
<a href="{{{ action('HomeController@showResume') }}}">Resume</a>
</h2> --}}

    <script src="http://code.createjs.com/preloadjs-0.3.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.9.8/TweenMax.min.js"></script>

    <script src="js/application.vendors.build.js"></script>
    <script src="js/vendors/require.js"></script>
    <script src="js/application.js"></script>

@stop
  </body>
</html>
