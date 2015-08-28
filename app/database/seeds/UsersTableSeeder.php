<?php

use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder {

	public function run()
	{
		/*delete all existing users*/
		DB::table('users')->delete();

		$this->createEnvUser();
		$this->createFakeUsers();
	}

	public function createEnvUser()
	{
		$user = new User();
		/*$user->username = $_ENV['USERNAME'];*/
		$user->first_name = $_ENV['USER_FIRST_NAME'];
		$user->last_name = $_ENV['USER_LAST_NAME'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASS'];
		$user->save();
	}

	public function createFakeUsers()
	{
		$faker = Faker::create();

		/*foreach(range(1, 20) as $index) {	*/
		for($i=0; $i<20; $i++) {
			$user = new User();
			$user->first_name = $faker->firstName;
			$user->last_name = $faker->lastName;
			$user->email = $faker->email;
			$user->password = $faker->password;
			$user->save();
		}
	}
}

?>