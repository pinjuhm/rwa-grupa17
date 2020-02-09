<?php

use Illuminate\Database\Seeder;

class PlanesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('planes')->delete();
        
        \DB::table('planes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Crni bombarder',
                'capacity' => 1000,
                'airline_id' => 2,
                'created_at' => '2020-02-09 20:12:50',
                'updated_at' => '2020-02-09 20:12:50',
            ),
        ));
        
        
    }
}
