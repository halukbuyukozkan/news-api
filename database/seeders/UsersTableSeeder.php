<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2023-07-24 20:11:07',
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'test',
                'password' => '$2y$10$3JLg3QfVKNAc3F7wVQFeyuWtdvLvE9eXB0DA44iO4882A41m7uGK2',
                'remember_token' => NULL,
                'updated_at' => '2023-07-24 20:11:07',
            ),
        ));
        
        
    }
}