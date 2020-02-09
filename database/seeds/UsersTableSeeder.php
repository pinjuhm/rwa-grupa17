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
                'email' => 'a@a.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XHQPM0bl2oukXwFx.QfAWOe3kDcSCeZ1rDd99zCL8RwbnDVhXBgJK',
                'first_name' => 'ivan',
                'last_name' => 'osta',
                'is_admin' => 1,
                'remember_token' => NULL,
                'created_at' => '2020-01-18 13:40:28',
                'updated_at' => '2020-01-18 15:21:05',
            ),
            1 => 
            array (
                'id' => 2,
                'email' => 'b@b.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ipnzFdFA46..QRMhiEY.wuEyiVjyIlCOsytvyOj9HNWMj8BGPjaf2',
                'first_name' => 'Filip',
                'last_name' => 'Filipovic',
                'is_admin' => 0,
                'remember_token' => NULL,
                'created_at' => '2020-02-09 19:38:40',
                'updated_at' => '2020-02-09 19:38:40',
            ),
        ));
        
        
    }
}