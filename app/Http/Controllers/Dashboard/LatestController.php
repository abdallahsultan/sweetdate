<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Latest;

class LatestController extends Controller
{

    public function index()
    {
        $about = Latest::findOrFail(1);

        return view('admin.latest.index', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $about = Latest::findOrFail($id);

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

       session()->flash('message', 'latest Updates Successfully');

       return redirect('dashboard/latest');
    }

}
