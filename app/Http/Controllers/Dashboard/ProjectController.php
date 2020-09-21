<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectController extends Controller
{


    public function index()
    {
        $projects = Project::latest()->get();

        return view('admin.project.index', compact('projects'));
    }


    public function create()
    {

        return view('admin.project.create');
    }


    public function store(Request $request)
    {


        $request->validate([

            'ar.*'         => 'required|string | min:5',
            'en.*'         => 'required|string | min:5',
            'avatar'       => 'required',
        ]);


        $input = $request->except('avatar', 'video', 'gallery');


        $file = $request->file('avatar');


       if($file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = 'Mokhtar_ali_' . uniqid() . '_.'  . $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

       }

       $video = $request->file('video');


      if($video){

           $videoName = $video->getClientOriginalExtension();

           $videoName ='Mokhtar_ali_' . uniqid() . '_.'  . $videoName;

           $video->move('images/', $videoName);

           $input['video'] = $videoName;

      }


       $gallery = $request->file('gallery');

       $photos = [];

      if($gallery){

        foreach($gallery as $pic){

            $galleryName = $pic->getClientOriginalExtension();

            $galleryName = 'Mokhtar_ali_' . uniqid() . '_.'  . $galleryName;

            $pic->move('images/', $galleryName);

            $photos [] = $galleryName ;

        }

         $input['gallery'] =  implode('/', $photos);;

      }

 

       Project::create($input);

       session()->flash('message', 'project Added Successfully');

       return redirect('dashboard/project');
    }


    public function edit($id)
    {

        $project = Project::findOrFail($id);

        return view('admin.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([

            'ar.*'         => 'required|string | min:5',
            'en.*'         => 'required|string | min:5',
        ]);

        $input = $request->except('avatar', 'video', 'gallery');


        $file = $request->file('avatar');


       if($file){

            $fileName = $file->getClientOriginalExtension();

            $fileName = 'Mokhtar_ali_' . uniqid() . '_.'  . $fileName;

            $file->move('images/', $fileName);

            $input['avatar'] = $fileName;

        }else{

            $input['avatar'] = $project->avatar;

        }

       $video = $request->file('video');


      if($video){

           $videoName = $video->getClientOriginalExtension();

           $videoName ='Mokhtar_ali_' . uniqid() . '_.'  . $videoName;

           $video->move('images/', $videoName);

           $input['video'] = $videoName;

      }else{

        $input['video'] = $project->video;

    }


       $gallery = $request->file('gallery');

       $photos = [];

      if($gallery){

        foreach($gallery as $pic){

            $galleryName = $pic->getClientOriginalExtension();

            $galleryName = 'Mokhtar_ali_' . uniqid() . '_.'  . $galleryName;

            $pic->move('images/', $galleryName);

            $photos [] = $galleryName ;

        }

         $input['gallery'] =  implode('/', $photos);

      }else{

        $input['gallery'] = $project->gallery;

    }

 

        $project->update($input);

       session()->flash('message', 'project Updates Successfully');

       return redirect('dashboard/project');
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        session()->flash('message', 'project Deleted Successfully');

        return redirect('dashboard/project');
    }
}
