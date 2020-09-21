<?php

use App\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{

    public function run()
    {
        Slider::create([

            'avatar'       => 'bg1.jpg',
            "ar['title']"  => 'Residence',
            "en['title']"  => 'Residence',
            "ar['body']"   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text',
            "en['body']"   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text',

        ]);
    }
}
