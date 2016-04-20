<?php 

class UserTableSeeder extends Seeder {

	public function run()
	{

		$user = new User();
		$user->first_name = $_ENV['USER_FIRST'];
		$user->last_name = $_ENV['USER_LAST'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASS'];
		$user->role_id = $_ENV['USER_ROLE'];
		$user->save();

		$user = new User();
		$user->first_name = 'Jerry';
		$user->last_name = 'Garcia';
		$user->email = 'jerry@dead.net';
		$user->password = $_ENV['USER2_PASS'];
		$user->role_id = $_ENV['USER2_ROLE'];
		$user->save();
		
	}

}

?>