<?php

use App\Comment;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Factory::create();
      $post = 50;
      
      for ($i = 0; $i < 200; $i++) {
        Comment::create([
          'name' => $faker->name,
          'email' => $faker->email,
          'text' => $faker->sentence,
          'post_id' => rand(1, $post)
        ]);
      }



    }
}
