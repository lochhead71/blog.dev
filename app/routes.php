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

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris") {
        return Redirect::to('/');
    } else {
        $data = array('name' => $name);
        return View::make('my-first-view')->with($data);
    }
});

Route::get('/', 'HomeController@showWelcome');

Route::get('/login', 'UserController@showLogin');

Route::post('/login', 'UserController@doLogin');

Route::get('/logout', 'UserController@logout');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

// routes for sample front-end sites

Route::get('/thump_a_trump', 'HomeController@thumpATrump');
Route::get('/simple_simon', 'HomeController@simpleSimon');
Route::get('/weather_map', 'HomeController@weatherMap');

Route::get('/rolldice/{guess?}', 'HomeController@rollDice');

// routes for posts resource

Route::resource('posts', 'PostsController');

Route::get('my-posts', function() {

	$user = User::find(1);

	foreach($user->posts as $post) {
		echo "Title is: $post->title" . "<br>";
		echo "Body is: $post->body" . "<br>";
	}
});




