<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->get();
       

        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {

        $request->validate([

            'ar.*'     => 'required|string | min:5',
            'en.*'     => 'required|string | min:5',
        ]);


        $input = $request->all();

       $blog = Category::create($input);

       session()->flash('message', 'Category Added Successfully');

       return redirect('dashboard/category');


    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

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

       return redirect('dashboard/category');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();

        session()->flash('message', 'Category Deleted Successfully');

        return redirect('dashboard/category');
    }
}
