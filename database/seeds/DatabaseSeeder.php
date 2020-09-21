<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       $this->call(UsersTableSeeder::class);

       $this->call(AboutTableSeeder::class);

       $this->call(SettingTableSeeder::class);

    }
}
