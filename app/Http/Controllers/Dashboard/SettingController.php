<?php

namespace App\Http\Controllers\Dashboard;

use App\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends Controller
{

    public function index()
    {
        $setting = Setting::findOrFail(1);

        return view('admin.setting.index', compact('setting'));
    }



    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);

        $request->validate([

            'facebook'    => 'required',
            'twitter'     => 'required',
            'instagram'   => 'required',
            'linkedin'    => 'required',
            'itphone'     => 'required',
            'itemail'     => 'required',
            'address'     => 'required',
        ]);


        $input = $request->all();

        $file = $request->file('logo');

       if($file){

        $fileName = $file->getClientOriginalExtension();

        $fileName = uniqid() . 'mokhtar_ali.'. $fileName;

        $file->move('images/', $fileName);

        $input['logo'] = $fileName;

       }else {

        $input['logo'] = $setting->logo;

       }


       $logo = $request->file('favicon');

       if($logo){

        $logoName = $logo->getClientOriginalExtension();

        $logoName = uniqid() . 'mokhtar_ali.'. $logoName;

        $logo->move('images/', $logoName);

        $input['favicon'] = $logoName;

       }else {

        $input['favicon'] = $setting->favicon;

       }

       $setting->update($input);

       session()->flash('message', 'setting Updated Successfully');

       return redirect('dashboard/setting');
    }

    public function colors() {

        $color = Color::findOrFail(1);

        return view('admin.setting.color', compact('color'));
    }

    public function updateColor(Request $request) {

        $color = Color::findOrFail(1)->update(['main' => $request->color]);

        return view('admin.setting.color', compact('color'));
    }

}
