<?php

namespace App\Http\Controllers\Dashboard;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::findOrFail(1);

        return view('admin.about.index', compact('about'));
    }


    public function update(Request $request, $id)
    {
        $about = About::findOrFail($id);



        $request->validate([

            'ar.*'      => 'required',
            'en.*'      => 'required',
        ]);


        $input = $request->all();

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalName();

        $fileName = uniqid() . $fileName;

        $file->move('images/', $fileName);

        $input['avatar'] = $fileName;

       }else {

        $input['avatar'] = $about->avatar;

       }

       $about->update($input);

       session()->flash('message', 'about Updates Successfully');

       return redirect('dashboard/about');
    }

}
