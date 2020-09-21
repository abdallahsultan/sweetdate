<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([

            'name' => 'Super Admin',
            'email' => 'admin@app.com',
            'avatar' => 'defualt.png',
            'password' => bcrypt('secret'),
            'role_id'  => '1'
        ]);
    }
}
