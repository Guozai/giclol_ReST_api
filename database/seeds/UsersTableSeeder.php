<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder {
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'aaa@gmail.com',
            'password' => 'asdf1111',
            'remember_token' => 'What\'s my birthday?'
        ]);
    }
}