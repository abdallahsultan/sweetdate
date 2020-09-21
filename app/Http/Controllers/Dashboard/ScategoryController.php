<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scategory;

class ScategoryController extends Controller
{

    public function index()
    {
        $categories = Scategory::latest()->get();

        return view('admin.scategory.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.scategory.create');
    }


    public function store(Request $request)
    {

        $request->validate([

            'ar.*'       => 'required|string | min:5',
            'en.*'       => 'required|string | min:5',
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


       $blog = Scategory::create($input);

       session()->flash('message', 'scategory Added Successfully');

       return redirect('dashboard/scategory');


    }

    public function edit($id)
    {
        $category = Scategory::findOrFail($id);

        return view('admin.scategory.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $scategory = Scategory::findOrFail($id);

        $request->validate([

            'ar.*'     => 'required|string | min:5',
            'en.*'     => 'required|string | min:5',

        ]);


        $input = $request->all();

        $file = $request->file('avatar');

        if($file){

         $fileName = $file->getClientOriginalName();

         $fileName = uniqid() . $fileName;

         $file->move('images/', $fileName);

         $input['avatar'] = $fileName;

        }else {

         $input['avatar'] = $scategory->avatar;

        }



       $scategory->update($input);

       session()->flash('message', 'scategory Updated Successfully');

       return redirect('dashboard/scategory');
    }

    public function destroy($id)
    {
        scategory::findOrFail($id)->delete();

        session()->flash('message', 'scategory Deleted Successfully');

        return redirect('dashboard/scategory');
    }
}
