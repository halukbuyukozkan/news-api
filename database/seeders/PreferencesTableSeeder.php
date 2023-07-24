<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PreferencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('preferences')->delete();
        
        \DB::table('preferences')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'id' => 1,
                'name' => 'BBC ',
                'source_id' => 'bbc-sport',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'id' => 2,
                'name' => 'CNN',
                'source_id' => 'cnn',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'id' => 3,
                'name' => 'Bloomberg',
                'source_id' => 'bloomberg',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}