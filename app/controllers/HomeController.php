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
		$posts = Post::with('user')->paginate(4);
			return View::make('hello')->with('posts', $posts);
	}

	public function thumpATrump()
	{
		return View::make('thump_a_trump');
	}

	public function simpleSimon()
	{
		return View::make('simple_simon');
	}

	public function weatherMap()
	{
		return View::make('weather_map');
	}

	public function rollDice($guess = null)
	{
		$roll = mt_rand(1, 6);
		$data = array('roll'=>$roll, 'guess'=>$guess);
		return View::make('roll-dice')->with($data);
	}

}
