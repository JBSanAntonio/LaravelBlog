<?php

use Faker\factory as Faker;


class PostsTableSeeder extends Seeder {

	public function run()
	{
		/*delete all existing posts*/
		DB::table('posts')->delete();
		
		$faker = Faker::create();

		for($i=0; $i<100; $i++) {
		/*foreach(range(1, 300) as $index) {	*/
			$post = new Post();
			$post->title = $faker->catchPhrase;
			$post->user_id = User::all()->random()->id;
			$post->body = $faker->bs;
			$post->save();
		}
	}
}

?>