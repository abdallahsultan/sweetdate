<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{

    public function run()
    {
        Setting::create([

            'facebook'    => 'facebook.com',
            'twitter'     => 'twitter.com',
            'instagram'   => 'instagram.com',
            'linkedin'    => 'linkedin.com',
            'logo'        => 'logo.png',
            'logo_small'  => 'logo2.png',
            'itphone'     => '00966 115 202 593',
            'itemail'     => 'info@highvision.sa',
            'mphone'      => '00966 115 202 593',
            'memail'      => 'info@highvision.sa',
            'dphone'      => '00966 115 202 593',
            'demail'      => 'info@highvision.sa',
            'address'     => 'Address goes here, address goes here here',
            'meta'        => 'high vion company',
        ]);
    }
}
