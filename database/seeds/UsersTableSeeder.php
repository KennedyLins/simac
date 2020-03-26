<?php

use Illuminate\Database\Seeder;
use App\User;

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

        	'name' 		=> 'Kennedy Lins',
        	'email' 	=> 'kennedy.lins@gmail.com',
        	'password' 	=> bcrypt('132456'),

        ]);
    }
}
