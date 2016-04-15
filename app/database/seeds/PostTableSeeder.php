<?php 

class PostTableSeeder extends Seeder {

	public function run()
	{

		$post = new Post();
		$post->title = 'Hello World!';
		$post->body = 'This is my first post utilizing the Larvel framework I\'m using to build this website. I\'ve included it in my seeder.';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Follow up post';
		$post->body = 'This is my second post; I\'m excited how user-friendly this development tool, freeing me up to focus on custom features and the look and feel of the user interface.. thanks, Laravel!';
		$post->user_id = User::first()->id;
		$post->save();

		$post = new Post();
		$post->title = 'Third time\'s the charm!';
		$post->body = 'This is third post in my seeder. My mother used to dabble in interior design when I was growing up and instilled the preference for triptychs... Google it!';
		$post->user_id = User::first()->id;
		$post->save();

	}

}

?>