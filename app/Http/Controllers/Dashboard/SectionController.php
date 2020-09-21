<?php

namespace App\Http\Controllers\Dashboard;

use App\contactsection;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{

    public function countersection ()
    {
        $counters = Counter::all();

        return view('admin.setting.counter', compact('counters'));
    }


    public function editcounter($id)
    {
        $counter = Counter::findOrFail($id);

        return view('admin.setting.editcounter', compact('counter'));
    }


    public function updatecounter(Request $request, $id)
    {
        $counter = Counter::findOrFail($id);

        $request->validate([

            'ar.title' => 'required',
            'en.title' => 'required',
            'value' => 'required',
        ]);

        $input = $request->all();

        $counter->update($input);

        session()->flash('message', 'Data Updated Successfully');

        return redirect('dashboard/countersection');

    }


    public function contactsection()
    {
        $contact = contactsection::findOrFail(1);

        return view('admin.setting.contact', compact('contact'));
    }




    public function updatecontact(Request $request, $id)
    {
        $contact = contactsection::findOrFail($id);

        $request->validate([

            'ar.title' => 'required',
            'en.title' => 'required',
        ]);

        $input = $request->all();

        $file = $request->file('avatar');

        if($file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = 'Mokhtar_ali_' . uniqid() . '_.'  . $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

        }else{

            $input['avatar'] = $contact->avatar;

        }


        $contact->update($input);

        session()->flash('message', 'Data Updated Successfully');

        return redirect('dashboard/contactsection');
    }



}
