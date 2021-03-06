<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showWelcome()
	{
		return View::make('hello');
	}
		public function showHome()
	{
		return View::make('home');
	}
	public function showJBuser()
	{
		return View::make('jbuser');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showPortfolioTwo()
	{
		return View::make('portfolioTwo');
	}

	public function showCalculator()
	{
		return View::make('calculator');
	}

	public function showSimon()
	{
		return View::make('simon');
	}

	public function showWineseller()
	{
		return View::make('wineseller');
	}

	public function showWeatherAPI()
	{
		return View::make('weatherAPI');
	}

	public function showSignup()
	{
		return View::make('signup');
	}

	public function showAboutUs()
	{
		return View::make('aboutUs');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
	
		$email = Input::get('email');
		$password = Input::get('password');
		
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
	    	return Redirect::intended('/home');
		    /* display session flash success message*/
			Session::flash('successMessage', 'You are logged in now.');
		} else {
			Session::flash('errorMessage', 'You need to be logged in to post. Please login.');
	    	return Redirect::to('HomeController@showLogin');
	    	/* display session flash success error*/
			Session::flash('errorMessage', 'Login failed - please try again.');
	    
	    }   	
	}

	public function doLogout()
	{
		Auth::logout();

		Session::flash('successMessage', 'You are logged out.');
		return Redirect::to('home');
	}


}
