<?php

use Illuminate\Database\Seeder;
use Pastillero\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
            'username' => 'Augusto Rende Giacomelli',
            'email' => 'augustorendegiacomelli@gmail.com',
            'password' => bcrypt('123456'),
        	'group' => 'admin',
        	'remember_token' => str_random(10),
        	'organization_id' => 1,
        ]);

        factory(User::class, 10)->create();
    }
}
