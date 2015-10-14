@extends('layouts.resume-portfolio-master')

@section('title')
    <title>Portfolio</title>

@section('content')

<div class="portfolioBody flex-container">

  <div class="grid-item--width3 flex-item js-masonry project proj1 flex-item">
    <h4>Laravel projects</h4>
    <dt>MVC Website:</dt>
    <dd>Model-view-controller (MVC) Create, Read, Update, and Delete (CRUD) team project using PHP, MySQL, jQuery, JS, HTML5, CSS3, Laravel 4.2</a> | <a href="http://wannaplay.site"></dd>
    <p></p>
    <p>Model-View-Controller (MVC) Content Management System (CMS) website programmed using Laravel framework, PHP, MySQL, JavaScript, jQuery, HTML5, and CSS. Added image uploading. Developed many-to-many relationship with pivot table in MySQL to add Tagging.</p>
    <p><a class="btn btn-default" href="{{{ action('HomeController@showHome') }}}" role="button">Visit Vagabondtrip.com &raquo;</a></p>
  </div>

  <div class="grid js-masonry project proj2 flex-item">
    <h4>API Ajax Weather Map</h4>
    <p>3-day weather forecast using OpenWeatherMap API, GoogleMaps API, and geocoding</p>
    <p><a class="btn btn-default" href="{{{ action('HomeController@showWeatherAPI') }}}" role="button">View Weather &raquo;</a></p>
  </div>

  <div class="grid js-masonry project proj3 flex-item">
    <h4>Web Game</h4>
    <p>Simple Simon game programmed in HTML, CSS, Javascript, and JQuery</p>
    <p><a class="btn btn-default" href="{{{ action('HomeController@showSimon') }}}" role="button">Demo Game &raquo;</a></p>
  </div>

  <div class="grid js-masonry project proj4 flex-item">
    <h4>Model-View-Controller Website</h4>
    <p>Model-view-controller (MVC) team project using PHP, MySQL, HTML, CSS, and Github version control</p>
    <p><a class="btn btn-default" href="{{{ action('HomeController@showWineseller') }}}" role="button">View Home Page &raquo;</a></p>
  </div>

  <div class="grid js-masonry project proj5 flex-item">
    <h4>Trends Website</h4>
    <p>Personal Trends Website in development. Tracked with Google Analytics.</p>
    <p><a class="btn btn-default" href="http://www.trendlookout.com" role="button">View Trends Site &raquo;</a></p>
  </div>

  <div class="grid js-masonry project proj6 flex-item">
    <h4>Javascript Calculator</h4>
    <p>Online calculator programmed in Javascript and styled after Mac calculator using HTML5 and CSS</p>
    <p><a class="btn btn-default" href="{{{ action('HomeController@showCalculator') }}}" role="button">Demo Calculator &raquo;</a></p>
  </div>

  <div class="grid js-masonry project proj7 flex-item">
    <h4>Wordpress Website</h4>
    <p>Personal Wordpress blog created in 2014 covering wine, cuisine and travel. Integrated with Facebook, Twitter, and IFTTT.</p>
    <p><a class="btn btn-default" href="http://www.venueandvine.com" role="button">View Venue & Vine &raquo;</a></p>  
  </div>
</div>

@stop