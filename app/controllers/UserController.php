<?php 

class UserController extends \BaseController {

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		// dd(Input::all());
	    $validator = Validator::make(Input::all(), User::$rules);

	    if ($validator->fails()) {

    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    Session::flash('errorMessage', 'The form was unable to be submitted.');
	        return Redirect::back()->withInput()->withErrors($validator);
	    }

	    if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
		    return Redirect::action('HomeController@showWelcome');
		}
		else
		{
		    Session::flash('errorMessage', 'Your email or password was not correct');
		    return Redirect::back()->withInput();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::action('HomeController@showWelcome');
	}

}

 ?>