<?php

use Illuminate\Database\Seeder;

class FlightsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flights')->delete();
        
        \DB::table('flights')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_id_from' => 7,
                'city_id_to' => 4,
                'plane_id' => 1,
                'price' => 11,
                'datetime' => '2020-07-17 20:00:00',
                'duration' => 111,
                'promoted' => 1,
                'completed' => 0,
                'created_at' => '2020-07-02 16:04:18',
                'updated_at' => '2020-07-02 16:04:18',
            ),
            1 => 
            array (
                'id' => 2,
                'city_id_from' => 7,
                'city_id_to' => 3,
                'plane_id' => 1,
                'price' => 54,
                'datetime' => '2020-07-30 14:00:00',
                'duration' => 70,
                'promoted' => 1,
                'completed' => 0,
                'created_at' => '2020-07-15 11:51:23',
                'updated_at' => '2020-07-15 11:51:23',
            ),
            2 => 
            array (
                'id' => 3,
                'city_id_from' => 7,
                'city_id_to' => 2,
                'plane_id' => 1,
                'price' => 54,
                'datetime' => '2020-07-30 14:00:00',
                'duration' => 70,
                'promoted' => 1,
                'completed' => 0,
                'created_at' => '2020-07-15 11:51:23',
                'updated_at' => '2020-07-15 11:51:23',
            ),
        ));
        
        
    }
}