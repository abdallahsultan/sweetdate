<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pcategory;
use App\PcategoryTranslation;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
        $projects = Product::latest()->get();
      

        return view('admin.product.index', compact('projects'));
    }


    public function create()
    {

        $pcategories= PcategoryTranslation::all();
        return view('admin.product.create', compact('pcategories'));
    }


    public function store(Request $request)
    {


        $request->validate([

            'ar.*'         => 'required|string | min:5',
            'en.*'         => 'required|string | min:5',
        
        ]);

       
        $input = $request->except('avatar', 'video', 'gallery');


        $file = $request->file('avatar');


       if($file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = 'abdullah_Sultan' . uniqid() . '_.'  . $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

       }else{
        $fileName = 'defualt.png';
        $input['avatar'] = $fileName;

       }
      
       $input['pcategory_id'] = $request->pcategory_id;
       Product::create($input);

       session()->flash('message', 'Product Added Successfully');

       return redirect('dashboard/product');
    }


    public function edit($id)
    {

        $project = Product::findOrFail($id);


        return view('admin.product.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Product::findOrFail($id);

        $request->validate([

            'ar.*'         => 'required|string | min:5',
            'en.*'         => 'required|string | min:5',
        ]);

        $input = $request->except('avatar', 'video', 'gallery');


        $file = $request->file('avatar');


       if($file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = 'Mokhtar_ali_' . uniqid() . '_.'  . $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

        }else{

            $input['avatar'] = $project->avatar;

        }


        $project->update($input);

       session()->flash('message', 'Product Updates Successfully');

       return redirect('dashboard/product');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        session()->flash('message', 'Product Deleted Successfully');

        return redirect('dashboard/product');
    }
    }
