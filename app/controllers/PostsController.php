<?php

class PostsController extends \BaseController {

	public function __Construct() {
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::with('user')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);

		if(!$post) {
			Session::flash('errorMessage', 'The post could not be deleted.');
		}
		$post->delete();
	    Session::flash('successMessage', 'The post has been deleted.');
		return Redirect::action('PostsController@index');
	}

	public function validateAndSave($post)
	{
	    // create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {

    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    Session::flash('errorMessage', 'The form was unable to be submitted.');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }

    	if(isset($post->id))
    	{
    		Session::flash('successMessage', 'The post has been updated.');	
    	} else {
   			Session::flash('successMessage', 'The post has been created.');
    	}

		$post->title = Input::get('title');
		$post->body  = Input::get('body');
		// $post->user_id = Auth::id();
		$post->user_id = User::first()->id;
		$post->save();
		Log::info($post);

		return Redirect::action('PostsController@show', $post->id);
	}

	public function postNotFound($id)
	{
		$post = Post::find($id);
		if (isnull($post)) {
			App::abort(404);
		}
		return $post;
	}

}
