<?php

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
                'id' => 1,
                'email' => 'admin2@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XHQPM0bl2oukXwFx.QfAWOe3kDcSCeZ1rDd99zCL8RwbnDVhXBgJK',
                'first_name' => 'Mario',
                'last_name' => 'Maric',
                'is_admin' => 1,
                'remember_token' => NULL,
                'created_at' => '2020-01-18 13:40:28',
                'updated_at' => '2020-01-18 15:21:05',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'test@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ipnzFdFA46..QRMhiEY.wuEyiVjyIlCOsytvyOj9HNWMj8BGPjaf2',
                'first_name' => 'Filip',
                'last_name' => 'Filipovic',
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2020-02-09 19:38:40',
                'updated_at' => '2020-02-09 19:38:40',
            ),
            2 => 
            array (
                'id' => 3,
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/xrd.yz7YSsB76A/0AHBVugC8ekuA4Mw8Wi1XcMUuumunleYHCfAe',
                'first_name' => 'Ivan',
                'last_name' => 'Ivanic',
                'is_admin' => 1,
                'remember_token' => NULL,
                'created_at' => '2020-07-02 15:52:07',
                'updated_at' => '2020-07-02 15:52:07',
            ),
        ));
        
        
    }
}