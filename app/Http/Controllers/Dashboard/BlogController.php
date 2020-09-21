<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{

    
    public function index()
    {

        $blogs = Blog::latest()->get();

        return view('admin.blog.index', compact('blogs'));
    }


    public function create()
    {
        return view('admin.blog.create');
    }


    public function store(Request $request)
    {


        $request->validate([

            'avatar'    => 'required',
            'ar*'       => 'required|string',
            'en*'       => 'required|string',
        ]);


        $input = $request->all();

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalExtension();

        $fileName = uniqid() . 'Mokhtar_ali.'.  $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

       }

       $blog = Blog::create($input);

       session()->flash('message', 'Blog Added Successfully');

       return redirect('dashboard/blog');
    }


    public function edit($id)
    {

        $blog = Blog::findOrFail($id);

        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([

            'ar*'     => 'required',
            'en*'     => 'required',
        ]);


        $input = $request->all();

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalExtension();

        $fileName = uniqid() . 'Mokhtar_ali.'.  $fileName;

        $file->move('images/', $fileName);

        $input['avatar'] = $fileName;

       }else {

        $input['avatar'] = $blog->avatar;

       }


       $blog->update($input);

       session()->flash('message', 'Blog Updates Successfully');

       return redirect('dashboard/blog');
    }

    public function destroy($id)
    {
        BLog::findOrFail($id)->delete();

        session()->flash('message', 'Blog Deleted Successfully');

        return redirect('dashboard/blog');
    }
}
