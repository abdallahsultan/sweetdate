<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class ProfileController extends Controller
{

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('admin.profile.index', compact('user'));

    }




    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $request->validate([

            'name'       => 'required|string | min:5',
            'email'      => 'required',

        ]);


        $input = $request->except(['avatar', 'password', 'password_confirmation']);

        $file = $request->file('avatar');

       if($file){

        $fileName = $file->getClientOriginalName();

        $fileName = uniqid() . $fileName;

        $file->move('images/', $fileName);

        $input['avatar'] = $fileName;

       }else {

        $input['avatar'] = $user->avatar;

       }


       $password = $request->password;

       if($password){



        $input['password'] = bcrypt($request->password);

       }else{

        $input['password'] = $user->password;

       }

       $user->update($input);

       session()->flash('message', 'User Updates Successfully');

       return redirect()->back();
    }


}
