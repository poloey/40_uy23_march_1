<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
      $categories = ['Web', 'Php', 'Graphics', 'Html'];
      foreach ($categories as $category) {
        Category::create([
          'name' => $category
        ]);
      }
    }
}
