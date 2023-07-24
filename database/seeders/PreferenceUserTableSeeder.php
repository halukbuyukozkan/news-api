<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PreferenceUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('preference_user')->delete();
        
        \DB::table('preference_user')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'preference_id' => 1,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 2,
                'preference_id' => 2,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'preference_id' => 3,
                'updated_at' => NULL,
                'user_id' => 1,
            ),
        ));
        
        
    }
}