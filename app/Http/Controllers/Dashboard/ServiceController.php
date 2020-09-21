<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scategory;
use App\Service;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::latest()->get();

        return view('admin.service.index', compact('services'));
    }


    public function create()
    {
 

        return view('admin.service.create');
    }


    public function store(Request $request)
    {


        $request->validate([

            'ar.*'       => 'required|string',
            'en.*'       => 'required|string',
            'avatar'     => 'required',
 
        ]);


        $input = $request->all();



        $file = $request->file('avatar');

        if($file){

         $fileName = $file->getClientOriginalExtension();

         $fileName = uniqid() . 'Mokhtar_ali.'.  $fileName;

             $file->move('images/', $fileName);

             $input['avatar'] = $fileName;

        }

        $input['avatar'] = $fileName;

        Service::create($input);

       session()->flash('message', 'service Added Successfully');

       return redirect('dashboard/service');


    }

    public function edit($id)
    {
        $categories = Scategory::all();

        $service = Service::findOrFail($id);

        return view('admin.service.edit', compact('service', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([

            'ar.*'             => 'required|string | max:105',
            'en.*'             => 'required|string | max:105',
 

        ]);




        $input = $request->except(['avatar']);

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalName();

        $fileName = uniqid() . $fileName;

        $file->move('images/', $fileName);

        $input['avatar'] = $fileName;

       }else {

        $input['avatar'] = $service->avatar;

       }



       $service->update($input);

       session()->flash('message', 'service Updated Successfully');

       return redirect('dashboard/service');
    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();

        session()->flash('message', 'service Deleted Successfully');

        return redirect('dashboard/service');
    }
}
