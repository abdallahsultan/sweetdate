<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{

    public function index()
    {

        $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
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

       $blog = Slider::create($input);

       session()->flash('message', 'Slider Added Successfully');

       return redirect('dashboard/slider');


    }


    public function edit($id) {

        $slider = Slider::findOrFail($id);

        return view('admin.slider.edit', compact('slider'));

    }



    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([

            'ar.*'     => 'required',
            'en.*'      => 'required',
        ]);


        $input = $request->all();

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalExtension();

        $fileName = uniqid() . 'Mokhtar_ali.'.  $fileName;

        $file->move('images/', $fileName);

        $input['avatar'] = $fileName;

       }else {

        $input['avatar'] = $slider->avatar;

       }

       $slider->update($input);

       session()->flash('message', 'slider Updates Successfully');

       return redirect('dashboard/slider');
    }

    public function destroy($id)
    {
        Slider::findOrFail($id)->delete();

        session()->flash('message', 'slider Deleted Successfully');

        return redirect('dashboard/slider');
    }
}
