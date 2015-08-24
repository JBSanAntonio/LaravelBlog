@extends('layouts.master')

@section('title')
    <title>Portfolio</title>


      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta id="viewport" name="viewport" content="width=1400, height=1280, initial-scale=.4, maximum-scale=.4, user-scalable=0">
      <link href="css/style.min.css" media="all" rel="stylesheet" type="text/css" />
      <link href="css/sprites.css" media="all" rel="stylesheet" type="text/css" />

      <meta property="og:image" content="http://www.ricardoalmeida.com.br/content/image/share.jpg"/>
      <meta property="og:title" content="Ricardo Almeida"/>
      <meta property="og:description" content="Referência da moda fashion no Brasil." />
      <meta property="og:url" content="http://ricardoalmeida.com.br"/>
      <meta property="og:site_name" content="Ricardo Almeida"/>
      <meta property="og:type" content="website"/>

      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

      <!--[if lt IE 9]>
        <script src="js/vendors/html5shiv.js"></script>
      <![endif]-->

      <script type="text/javascript">
        var url = window.location.href;

        if ( url.indexOf('%3F') >= 0 )
        {
          url = url.replace(/%3F/g, "?");
          window.location = url;
        }

        if ( url.indexOf('%3D') >= 0 )
        {
          url = url.replace(/%3D/g, "=");
          window.location = url;
        }

        if ( url.indexOf('%26') >= 0 )
        {
          url = url.replace(/%26/g, "&");
          window.location = url;
        };

        var index = url.indexOf('?')
        var params = ''

        if(index >= 0) params = url.substr(index)

        var ua = navigator.userAgent;
        if(ua.match(/iPhone/i) || ua.match(/iPod/i) || ua.match(/Android 2/i) || ua.match(/Windows Phone/i) || ua.match(/webOS/i) )
        {
          window.location = "mobile/";
        }
        else if(ua.match(/iPad/i) || ua.match(/Android 3/i) || ua.match(/Android 4/i))
        {
          window.location = "mobile/";
        }
        else
        {
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-19891746-1']);
          _gaq.push(['_setDomainName', '.ricardoalmeida.com.br']);
          _gaq.push(['_trackPageview']);

          (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        }

      </script>


@section('content')

<h1>Portfolio Page</h1>
<h2>
VIEW MY 
<a href="{{{ action('HomeController@showResume') }}}">Resume</a>
</h2>

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
