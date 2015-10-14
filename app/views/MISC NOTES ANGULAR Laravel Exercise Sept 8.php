MISC NOTES ANGULAR Laravel Exercise Sept 8 


<td>@{{parseDate(post.created_at.date) | date:"longDate" }}</td>


// parseDate method is the key to parsing and converting dates back from Laravel 
// into format Angular and JS can understand - take string parse  into date then date parsed into string 

$scope.parseDate = function(string) {
	var date = moment(string);
	return date.format();
	};




routes.php  [can view in artisan with php artisan routes]

	have to create routes & bc it is a resource must put above 

	Route::get("test", function() {
		return View::make('test');
	});

	test.blade.php

	@extends('layouts.master'

	@section('content')

	@stop

	@section('script')
		<script src="https://ajax...angular link")
		<script src="/js/blog.js" type

	@stop




	ADD THESE:

	Route::get('posts/manage', 'PostsController')...

[the following 2 routes not actually in routes, move into controller]

Route::get('angular', function() {
	return
})

Route::get('getList', function() {
	$posts = Post::with('user')->get();
	return Response::json($posts);
})

app.controller("ExampleController", [$log", "$http", function($log, $http) {
	
		$http.get("/some/url.json").then(function(data)) {
			$log.info ("Ajax request completed successfully!");
			Ajax get request to load data from server
			$log.debug(data);
		}, function(response) {
			$log.error(
			Ajax request failed for some reason!");

			$log.debug(response);
		});

		Post some data to the server
		$http.post("/different/url.php", {
			key1: "value a",
			key2: "value b"
		}),then(function() {
			$log.info("Info was sent to the server successfully!")
		}, function(response) {
			$log.error("Ajax request failed for some reason!");

			$log.debug(response);
		});
	}]);

})();


(function() {
	var app = angular.module("moduleName", []);

	app.controller("ExampleController", ['$scope', function($scope) {
		$scope.showElement = true;

		$scope.toggleElement = function() {

		}
	}])
})

<?php
//app/filters.php - dump into file


Route::filter('csrf', function()
{
	$token = Request::ajax() ? Request::header('X-Csrf-Token') : Input::get('_token');

	if (Session::token() !== $token) {
		throw new Illuminate\Session\TokenMismatchException;
	}
});

IN master.blade.php - add line 6 - make meta tag

<ead>

	<meta name="csrf token"


add call to angular







<?php
// app/controllers/PostsController.php

class PostsController extends \BaseController
{
	//...

	public function destroy($id)
	{
		// ...

		// Modify destroy() to send back JSON if it's been requeste
		if (Request::wnatsJson()) {
			return Response::json(array());
		} else {
			return Redirect::action('PostsController@index')
		}
	}
}

moduleName.js - set up new module

(function() {
	"use strict";

	// This should be the actual name of your module

	var app = angular.module("moduleName", []);

	// Find the token value from the page using jQuery
	const TOKEN = $("meta(name=csrf-token]").attr("content");

	//Set the token as an Angular constant
	app.constant("CSRF_TOKEN", TOKEN);

	//Configure $http to include both your token and a flag
})


blog.js

(function() {
	"use strict";

	var app = angular.module("blog", []);

	const TOKEN = $("meta[name=csrf-token]").attr("content");

	app.constant("CSRF_TOKEN", TOKEN);

	app.config(["$httpProvider", "CSRF_TOKEN", function*$httpProvider, CSRF_TOKEN) {
		$httpProvider.defaults.headers.common["X-Csrf-Token"] = CSRF_TOKEN;
		$httpProvider.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
	}]);

	app.controller("ManageController", ["$http", "$log", "$scope", function($http, $log, $scope) {
		$scope.posts = [];

		$http.get('/getList').then(function(response) {
			$log.info("Post list success response");

			$log.info(response);

		}, function(response) {
			$log.error("Post list error response!");

			$log.debug(response);
		});
	}]);
})();

app.constant("CSRF_TOKEN", TOKEN);



app.controller("ManageController", ["$http", "$log", "$scope", function($http, $log, $scope)])


angular.blade.php

managed controller