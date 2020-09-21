<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;

class TeamController extends Controller
{

    public function index()
    {
        $blogs = Team::latest()->get();

        return view('admin.team.index', compact('blogs'));
    }


    public function create()
    {
        return view('admin.team.create');
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

       $blog = Team::create($input);

       session()->flash('message', 'team Added Successfully');

       return redirect('dashboard/team');
    }


    public function edit($id)
    {

        $blog = Team::findOrFail($id);

        return view('admin.team.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Team::findOrFail($id);

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

       session()->flash('message', 'team Updates Successfully');

       return redirect('dashboard/team');
    }

    public function destroy($id)
    {
        Team::findOrFail($id)->delete();

        session()->flash('message', 'team Deleted Successfully');

        return redirect('dashboard/team');
    }
}
