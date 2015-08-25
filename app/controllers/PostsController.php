<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//show all listings here
		/*$posts=Post::all();*/
	    $posts = Post::paginate(4);
	    return View::make('posts.index')->with(array('posts' => $posts));
		return View::make('posts.index')->with('posts', $posts);
		return 'You are on index which shows a list of posts';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 *//*a*/
	public function create()
	{
		//
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		return $this->validateAndSave($post);
	}

	protected function validateAndSave($post)
	{
	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	// set flash data
			Session::flash('errorMessage', 'Unable to save input - please try again.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');

	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
	        // set flash data
			Session::flash('successMessage', 'Your post was successfully added.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');
	    }
		//this is like ...if(not corect) { return Redirect::back()->withInput(); else...*/
		/*var_dump(Input::all();*/
		
		$post = new Post();
		$post->title=Input::get('title');
		$post->body=Input::get('body');
		$post->save();

		return Redirect::action('PostsController@index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$post = Post::find($id);
		if(!$post)
		{
			return Redirect::back();

			// set flash data
			Session::flash('errorMessage', 'Unable to find that post - please try again.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');
		}

		 	// set flash data
			Session::flash('successMessage', 'Your post was successfully found.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');

		return View::make('posts.show')->with('post', $post);
		/*return 'This page shows a specific post by id number';*/
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::find($id);

			// set flash data
			Session::flash('successMessage', 'Edit selected post below.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');

		return View::make('posts.edit')->with('post', $post);
		return 'This page shows a post by id number and lets you edit it';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//like store but finding existing object by id & not creating new object
		$post=Post::find($id);
		$post->title=Input::get('title');
		$post->body=Input::get('body');
		$post->save();

		// set flash data
		Session::flash('successMessage', 'Your update was successful.');

		// retrieve flash data (same as any other session variable)
		$value = Session::get('key');
	
		return Redirect::action('PostsController@show', array($id));
		/*return Redirect::back();	*/
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post=Post::find($id);
		$post->delete();

		// set flash data
		Session::flash('successMessage', 'You successfully deleted the selected post.');

		// retrieve flash data (same as any other session variable)
		$value = Session::get('key');

		return Redirect::action('PostsController@index');
	}


}
