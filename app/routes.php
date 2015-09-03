<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::resource('posts', 'PostsController');

Route::get('/', 'HomeController@showHome');

Route::get('home', 'HomeController@showHome');

Route::get('resportfHome', 'HomeController@showResportfHome');

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('calculator', 'HomeController@showCalculator');

Route::get('simon', 'HomeController@showSimon');

Route::get('wineseller', 'HomeController@showWineseller');

Route::get('weatherAPI', 'HomeController@showWeatherAPI');

Route::get('signup', 'HomeController@showSignup');

Route::get('login', 'HomeController@showLogin');

Route::get('aboutUs', 'HomeController@showAboutUs');

Route::get('form', array('as' => 'myform', function()
{
	if(!Input::has('title/*username*/')) 
	{
/*		return View::make('form');
*/		return Redirect::back()->withInput();
		$input = Input::all();
	}
}));

Route::post('form', function()
{
	/*$input = Input::all();*/
	return var_dump($input::all());

	if(!Input::has('title') && !Input::has('body')) 
	{
		return Redirect::back()->withInput();
	}
});

Route::get('orm-test', function()
{
	$post = Post::find(1);
	$post->delete();
});

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');
/*{
	return 'logout.blade.php';

});*/

/* Check if image was uploaded or not*/
/* find out the file and move it onto uploads directory of our server keeping name uploaded with*/

/*Route::post('/upload', function(){
	if (Input::hasFile('image'))
	{
	    $file = Input::file('image');
	    $file->move('uploads', $file->getClientOriginalName());
	}
});*/

?>
