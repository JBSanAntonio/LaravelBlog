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

Route::get('/', 'HomeController@showWelcome');

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('calculator', 'HomeController@showCalculator');

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

Route::get('orm-test', function ()
{
	$post = Post::find(1);
	$post->delete();
});

?>
