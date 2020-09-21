<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;

class PartnerController extends Controller
{

    public function index()
    {
        $partners = Partner::latest()->get();

        return view('admin.partner.index', compact('partners'));
    }


    public function create()
    {
        return view('admin.partner.create');
    }


    public function store(Request $request)
    {

        $request->validate([

            'avatar'    => 'required',
        ]);


        $input = $request->all();

        $file = $request->file('avatar');

       if($file){

            $fileName = $file->getClientOriginalName();

            $fileName = uniqid() . $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

       }

       $partner_data = $request->except(['avatar']);

       $partner_data['avatar'] = $fileName;

       $partner = Partner::create($partner_data);

       session()->flash('message', 'partner Added Successfully');

       return redirect('dashboard/partner');
    }


    public function edit($id)
    {

        $partner = Partner::findOrFail($id);

        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $input = $request->all();

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalName();

        $fileName = uniqid() . $fileName;

        $file->move('images/', $fileName);

        $input['avatar'] = $fileName;

       }else {

        $input['avatar'] = $partner->avatar;

       }

       $partner_data = $request->except(['avatar']);

       $partner_data['avatar'] = $input['avatar'];

       $partner->update($partner_data);

       session()->flash('message', 'partner Updates Successfully');

       return redirect('dashboard/partner');
    }

    public function destroy($id)
    {
        Partner::findOrFail($id)->delete();

        session()->flash('message', 'partner Deleted Successfully');

        return redirect('dashboard/partner');
    }
}
