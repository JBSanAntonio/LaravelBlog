<?php
	
use Faker\factory as Faker;

class ImagesTableSeeder extends Seeder {

	public function run()
	{
		/*delete all existing images*/
		DB::table('images')->delete();

		$faker = Faker::create();

		for($i=0; $i<10; $i++) {

			$image = new Image();
			$image->post_id = Post::all()->random()->id;
			$image->url = $faker->imageUrl(640, 480, 'city');
			$image->image_title = '';
			$image->save();
		}
	}
}

?>