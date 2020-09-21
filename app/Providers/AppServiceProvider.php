<?php

namespace App\Providers;

use App\Category;
use App\Color;
use App\Mail;
use App\Pcategory;
use App\Reservation;
use App\Scategory;
use App\Seo;
use App\Service;
use App\Test;
use App\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->share('setting', Setting::findOrFail(1));

        view()->share('mailcount', Mail::where('status', '=', 0)->count());

        view()->share('testcount', Test::where('status', '=', 0)->count());

        view()->share('reservscount', Reservation::count());

        // view()->share('seo', Seo::findOrFail(1));

        view()->share('categories', Category::latest()->get());

        view()->share('pactegory', Pcategory::latest()->get());

        view()->share('pservices', Service::all());

        view()->share('sactegory', Scategory::all());
    }
}
