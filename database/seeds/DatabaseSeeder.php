<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(AirlinesTableSeeder::class);
        $this->call(PlanesTableSeeder::class);
        $this->call(FlightsTableSeeder::class);
    }
}
