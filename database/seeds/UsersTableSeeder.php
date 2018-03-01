<?php

use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        [
          'name' => 'tawhid',
          'email' => 'tawhid@gmail.com'
        ],
        [
          'name' => 'jb',
          'email' => 'jb@gmail.com'
        ],
        [
          'name' => 'mobarok',
          'email' => 'mobarok@gmail.com'
        ],
        [
          'name' => 'nur',
          'email' => 'nur@gmail.com'
        ],
        [
          'name' => 'monjur',
          'email' => 'monjur@gmail.com'
        ],

      ];
      foreach ($users as $user): 
        User::create([
          'name' => $user['name'],
          'email' => $user['email'],
          'password' => bcrypt('secret')

        ]);
        
      endforeach;
    }
}
