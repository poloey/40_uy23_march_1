<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
      $user = 5;
      $category = 4;

      foreach (range(1, 50) as $i) {
        Post::create([
          'title' => $faker->sentence,
          'content' => $faker->paragraph(10),
          'user_id' => rand(1, $user),
          'category_id' => rand(1, $category)
        ]);
      }


    }
}
