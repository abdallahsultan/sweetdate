<?php

namespace App\Http\Controllers;

use App\About;
use App\Blog;
use App\Category;
use App\contactsection;
use App\Counter;
use App\Latest;
use App\Mail;
use App\Partner;
use App\Product;
use App\Project;
use App\Reservation;
use App\Scategory;
use App\Service;
use App\Slider;
use App\Team;
use App\Test;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

    //    $contact = contactsection::findOrFail(1);

       $counters = Counter::all();

        $slider = Slider::findOrFail(1);

        $partners = Partner::latest()->get();

        $about = About::findOrFail(1);

        $story = Latest::findOrFail(1);

        $categories = Category::latest()->get();

        $services = Service::latest()->get();

        $teams = Team::latest()->get();

        $blogs = Blog::latest()->take(3)->get();

        $tests = Test::where('status', '=', 1)->latest()->get();

        $lprojects = Project::latest()->take(10)->get();

        $projectz = Project::first();

        $video = Video::findOrFail(1);

        $products = Product::all();


        return view('index', compact('video', 'products', 'lprojects', 'counters', 'story', 'projectz', 'blogs', 'partners', 'about', 'categories', 'services', 'slider', 'teams', 'tests'));
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(12);

        return view('blogs', compact('blogs'));
    }

    public function events()
    {
        $blogs = Project::latest()->paginate(12);

        return view('events', compact('blogs'));
    }




    public function blogdetails($id)
    {
        $blog = Blog::findOrFail($id);

        return view('singleblog', compact('blog'));
    }

    public function eventdetails($id)
    {
        $blog = Project::findOrFail($id);

        return view('singleevent', compact('blog'));
    }


    public function services()
    {
        $partners = Partner::latest()->get();

        $services = Service::latest()->get();

        return view('services', compact('services', 'partners'));
    }


    public function about()
    {
        $partners = Partner::latest()->get();

        $about = About::findOrFail(1);

        $services = Service::latest()->get();

        $teams = Team::latest()->get();

        $tests = Test::latest()->get();


        return view('about', compact('partners', 'about', 'teams', 'tests', 'services'));
    }


    public function projects()
    {

        $projects = Project::latest()->get();

        return view('portfolio', compact('projects'));
    }

    public function projectcat($id)
    {

        $projects = Project::where('category_id', $id)->latest()->get();

        return view('portfolio', compact('projects'));
    }

    public function products ()
    {

        $products = Product::all();

        return view('products', compact('products'));
    }
     
    public function place ()
    {

        return view('place');
    }
    public function reserve ()
    {

        return view('reserve');
    }
    
    public function menu ()
    {

        return view('menu');
    }
    public function reserveindoor ()
    {
        $reserve_indoor=Reservation::where('type','indoor')->latest()->get();
       
        $tables=[];
        foreach($reserve_indoor as $key => $value){

           $count= explode(',', $value['table']);
            if(count($count) == 1 ){
                array_push($tables,$value['table'] );
            }else{
                for ($i = 0; $i < count($count); $i++) {            
                    array_push($tables,$count[$i] );
                  }
            }
       
        }
     
   
    
        return view('reserve_indoor',compact("tables","reserve_indoor"));
    }
    public function reserveoutdoor ()
    { 
        $reserve_outdoor=Reservation::where('type','outdoor')->latest()->get();
       
        $tables=[];
        foreach($reserve_outdoor as $key => $value){

           $count= explode(',', $value['table']);
            if(count($count) == 1 ){
                array_push($tables,$value['table'] );
            }else{
                for ($i = 0; $i < count($count); $i++) {            
                    array_push($tables,$count[$i] );
                  }
            }
       
        }
     
   
    
        return view('reserve_outdoor',compact("tables","reserve_outdoor"));
    }


    public function projectdetails($id)
    {
        $project = Project::findOrFail($id);

        return view('project', compact('project'));
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);

        return view('product', compact('product'));
    }

    public function showservices($id)
    {
        $services = Service::where('scategory_id', $id)->latest()->get();

        return view('services', compact('services'));
    }

    public function service($id)
    {
        $service = Service::findOrFail($id);

        return view('service', compact('service'));
    }



    public function contactform (Request $request){



        $request->validate([

            'name'        => 'required',
            'email'       => 'required',
            'phone'       => 'required',
            'body'        => 'required',
        ]);

        $input = $request->all();

        Mail::create($input);

        session()->flash('message', 'Message Sent Successfully');

        return redirect()->back();

    }


    public function makereservation (Request $request){
        
        
        if($request->table ==null){
            session()->flash('error','you Should Complete information Your Booking');
            return back();
        }
        $request->validate([

            'name'         => 'required',
            'phone'        => 'required',
            'table'        =>'required',
            
        ]);
        
       
        
        $values=[];
        $table=$request->table;
        foreach($table as $key => $value)
    {
        $values[] = $key;
    }
        if($request->route()->getName() === "makereservationindoor" ){
            $type="indoor";
        }else{
            $type="outdoor";
        }
         
        
        $input = array_merge(request()->all(), ['table' => implode(",",$values),'type'=>$type]);
        
        Reservation::create($input);
        
       
       session()->flash('message', 'Hi'.' '.$request->name.','.' '.'Your request has been booked'.' '.implode(",",$values));

        return back();

    }


    public function openion(){

        return view('openion');
    }


    public function saveopenion(Request $request){

     
        $request->validate([

            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $input = [];

        $input['ar']['title'] = $request->name;
        $input['ar']['body'] = $request->message;
 
        $input['en']['title'] = $request->name;
        $input['en']['body'] = $request->message;
        // Rating
        $input['services']         = $request->services;
        $input['waiting_time']     = $request->waiting;
        $input['food_srevice']     = $request->foodserve;
        $input['team']             = $request->team;
        $input['sanitization']     = $request->sanitization;
        $input['avatar']     = 'defualt.png';
        $input['phone']      =  $request->phone;
        $input['status']     = 0;

        Test::create($input);

        session()->flash('message', 'Thank You Openion Saved Successfully');

        return redirect()->route('home');

    }


}
