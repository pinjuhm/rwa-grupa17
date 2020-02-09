<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'sdad',
                'created_at' => '2020-01-18 14:53:45',
                'updated_at' => '2020-01-18 15:45:21',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'HAHAHA',
                'created_at' => '2020-01-18 14:54:01',
                'updated_at' => '2020-01-18 14:54:01',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Mostar',
                'created_at' => '2020-01-18 15:14:01',
                'updated_at' => '2020-01-18 15:14:01',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Vueling',
                'created_at' => '2020-01-18 15:40:42',
                'updated_at' => '2020-01-18 15:40:42',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Vueling',
                'created_at' => '2020-01-18 15:41:00',
                'updated_at' => '2020-01-18 15:41:00',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Sarajevo',
                'created_at' => '2020-02-09 19:56:45',
                'updated_at' => '2020-02-09 19:56:45',
            ),
        ));
        
        
    }
}