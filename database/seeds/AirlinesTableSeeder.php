<?php

use Illuminate\Database\Seeder;

class AirlinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('airlines')->delete();
        
        \DB::table('airlines')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Vueling',
            'tag' => '(VUE)',
                'created_at' => '2020-01-18 15:43:49',
                'updated_at' => '2020-02-09 19:57:38',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Ryanair',
            'tag' => '(RYA)',
                'created_at' => '2020-02-09 19:57:47',
                'updated_at' => '2020-02-09 19:57:47',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Croatia Airlines',
            'tag' => '(CRO)',
                'created_at' => '2020-01-18 15:43:49',
                'updated_at' => '2020-02-09 19:57:38',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Wizzair',
            'tag' => '(WIZ)',
                'created_at' => '2020-01-18 15:43:49',
                'updated_at' => '2020-02-09 19:57:38',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'EasyJet',
            'tag' => '(EYJ)',
                'created_at' => '2020-01-18 15:43:49',
                'updated_at' => '2020-02-09 19:57:38',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Turkish Airlines',
            'tag' => '(TUA)',
                'created_at' => '2020-01-18 15:43:49',
                'updated_at' => '2020-02-09 19:57:38',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'jetBlue',
            'tag' => '(JTB)',
                'created_at' => '2020-01-18 15:43:49',
                'updated_at' => '2020-02-09 19:57:38',
            ),
        ));
        
        
    }
}