<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{

    public function run()
    {
        About::create([

             "title"  => 'We Always Aim for the best',
             "body"   => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum accumsan est, sit amet dictum massa ornare eget. Nullam eget malesuada leo. Curabitur lorem quam, bibendum quis eleifend sit amet, ullamcorper non sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sit amet dictum massa ornare eget. Curabitur lorem quam, bibendum quis eleifend sit amet, ullamcorper non sapien.',
             "avatar" => "Thinkstock-phone-laptop-tablet-1600x1067.jpg",

        ]);
    }
}
