<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends Controller
{

    public function index()
    {
        $video = Video::findOrFail(1);

        return view('admin.video.index', compact('video'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'link' => 'required',
        ]);

         $video = Video::findOrFail(1);

         $video->update([

            'link' => $request->link
         ]);

       session()->flash('message', 'Video Updates Successfully');

       return redirect('dashboard/video');

    }


    public function show($id)
    {

        $test = Video::findOrFail($id);

        if($test->status == 0){

            $test->update(['status' => '1']);

        }else{

            $test->update(['status' => '0']);
        }

        session()->flash('message', 'تمت بنجاح');

        return redirect('dashboard/video');
    }

}
