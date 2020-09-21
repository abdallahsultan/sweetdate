<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;

class TestController extends Controller
{

    public function index()
    {
        $test = Test::latest()->get();

        return view('admin.test.index', compact('test'));
    }


    public function create()
    {
        return view('admin.test.create');
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

       $blog = Test::create($input);

       session()->flash('message', 'Testimonial Added Successfully');

       return redirect('dashboard/test');
    }

    public function show($id)
    {

        $test = Test::findOrFail($id);

        if($test->status == 0){

            $test->update(['status' => '1']);

        }else{

            $test->update(['status' => '0']);
        }

        session()->flash('message', 'تمت بنجاح');

        return redirect('dashboard/test');
    }

    public function edit($id)
    {

        $blog = Test::findOrFail($id);

        return view('admin.test.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Test::findOrFail($id);

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

       session()->flash('message', 'Testimonial Updates Successfully');

       return redirect('dashboard/test');
    }

    public function destroy($id)
    {
        Test::findOrFail($id)->delete();

        session()->flash('message', 'Testimonial Deleted Successfully');

        return redirect('dashboard/test');
    }
}
