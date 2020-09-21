<?php

namespace App\Http\Controllers\Dashboard;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use App\Product;
use App\Project;
use App\Service;
use App\Team;
use App\Test;

class HomeController extends Controller
{

    public function index()
    {
        $blogsCounnt   = Blog::count();

        $servicesCount = Service::count();

        $projectsCount = Project::count();

        $testsCount = Test::count();

        $teamCount = Team::count();

        $partnerCount = Partner::count();

        $productCount = Product::count();


        return view('admin.index', compact('blogsCounnt', 'servicesCount', 'projectsCount', 'productCount', 'partnerCount', 'teamCount', 'testsCount'));
    }

}
