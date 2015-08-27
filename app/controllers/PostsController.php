<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		/*makes sure user is authenticated before take any actions; filter file acts*/
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//show all listings here
		$query = Post::with('user');

		$search=Input::get('search');

		if (Input::has('search')) {
			$query->where('title', 'like', '%'. $search . "%")
				  ->orWhere('body', 'like', '%' . $search . "%")
				  ->orWhereHas('user', function($q) use ($search){			
					$q->where('first_name', 'like', '%' . $search . "%")
					  ->orWhere('last_name', 'like', '%' . $search . "%");
			});
		}
		$posts = $query->orderBy('created_at', 'desc')->paginate(10);
    
		return View::make('posts.index')->with('posts', $posts);
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

	    	Log::info('This is some useful information.');

	    	// set flash data
			Session::flash('errorMessage', 'Unable to save input - please try again.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');

	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // set flash data
			Session::flash('successMessage', 'Your post was successfully added.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');
	    }
		//this is like ...if(not corect) { return Redirect::back()->withInput(); else...*/
		/*var_dump(Input::all();*/
		
	        // validation succeeded, create and save the post
			$post = new Post();
			$post->title=Input::get('title');
			$post->body=Input::get('body');

			/*need to add Auth::id() for create post to work*/
			$post->user_id = Auth::id();
			
			$post->save();
			
			if(Input::hasFile('image')) {
				$image = new Image();
				/*lines 96 through 113 added to control image upload*/
				// Get the uploaded file object
				$file = Input::file('image');
				$image->post_id=$post->id;

				if(Input::has('image_title')) {
					$image->image_title=Input::get('image_title');
				} else {
					$image->getClientOriginalName();
				}

				// Generate the necessary file details
				$extension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
				$filename = $file->getClientOriginalName();
				$path = 'img/posts/';

				// Move the uploaded image to the specified path
				// using the generated specified filename
				
				$image->url=$file->move($path, $filename);

				$image->save();	
			}

			



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
		// get the user with an id of 1
		/*$user = User::find(1);*/

		// get the user's posts
		/*$posts = $user->posts;*/

		// get the post with an id of 1
		$post = Post::find($id);

		if(!$post)
		{
			/*return Redirect::back();*/
			
			// set flash data
			Session::flash('errorMessage', 'Unable to find that post - please try again.');
			
			App::abort(404);
		}

		$images = Image::where('post_id', $post->id);

		// get the user's posts
		$user = $post->user;

		$data = array(
				'post' => $post,
				'user' => $user
				);
		//
		 	// set flash data
			Session::flash('successMessage', 'Your post was successfully found.');

			// retrieve flash data (same as any other session variable)
			$value = Session::get('key');

		return View::make('posts.show')->with('post', $post)->with('images', $images);
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
