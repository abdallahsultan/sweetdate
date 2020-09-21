<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Seo;

class SeoController extends Controller
{

    public function index()
    {
        $seo = Seo::findOrFail(1);

        return view('admin.seo.index', compact('seo'));
    }





    public function update(Request $request, $id)
    {
        $seo = Seo::findOrFail($id);

        $request->validate([

            'ar.*'      => 'required',
            'en.*'      => 'required',
        ]);


        $input = $request->all();

       $seo->update($input);

       session()->flash('message', 'Updated Successfully');

       return redirect()->back();
    }


}
