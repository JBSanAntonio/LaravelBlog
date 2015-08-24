<?php

use Faker\factory as Faker;


class PostsSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		/*delete all existing posts*/
		Post::truncate();

		for($i=0; $i<100; $i++) {
		/*foreach(range(1, 300) as $index) {	*/
		$post = new Post();
		$post->title = $faker->catchPhrase;
		$post->body = $faker->bs;
		$post->save();
		}
	}
}

?>