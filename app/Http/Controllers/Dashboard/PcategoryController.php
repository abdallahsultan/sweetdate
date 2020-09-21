<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pcategory;

class PcategoryController extends Controller
{

    public function index()
    {
        $categories = Pcategory::latest()->get();

        return view('admin.pcategory.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.pcategory.create');
    }


    public function store(Request $request)
    {

        $request->validate([

            'ar.*'     => 'required|string | min:5',
            'en.*'     => 'required|string | min:5',
        ]);


        $input = $request->all();

       $blog = Pcategory::create($input);

       session()->flash('message', 'Category Added Successfully');

       return redirect('dashboard/pcategory');


    }

    public function edit($id)
    {
        $category = Pcategory::findOrFail($id);

        return view('admin.pcategory.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Pcategory::findOrFail($id);

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

        $input['avatar'] = $category->avatar;

       }

       $company_data = $request->except(['avatar']);

       $category->update($company_data);

       session()->flash('message', 'Category Updated Successfully');

       return redirect('dashboard/pcategory');
    }

    public function destroy($id)
    {
        Pcategory::findOrFail($id)->delete();

        session()->flash('message', 'Category Deleted Successfully');

        return redirect('dashboard/pcategory');
    }
}
