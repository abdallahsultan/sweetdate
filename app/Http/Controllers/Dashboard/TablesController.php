<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tables;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Tables::latest()->get();
        
        return view('admin.tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'       => 'required',
            'price'       => 'required',
            // 'avatar'     => 'required',
 
        ]);


        $input = $request->all();



        // $file = $request->file('avatar');

        // if($file){

        //  $fileName = $file->getClientOriginalExtension();

        //  $fileName = uniqid() . 'Mokhtar_ali.'.  $fileName;

        //      $file->move('images/', $fileName);

        //      $input['avatar'] = $fileName;

        // }

        // $input['avatar'] = $fileName;

        Tables::create($input);

       session()->flash('message', 'Table Name  Added Successfully');

       return redirect('dashboard/tables');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $table = Tables::findOrFail($id);
        return view('admin.tables.edit',compact('table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $table = Tables::findOrFail($id);

        $request->validate([

            'name'     => 'required',
            'price'     => 'required',

        ]);
        $input = $request->all();
        $table->update($input);

        session()->flash('message', 'Table  Updated Successfully');
 
        return redirect('dashboard/tables');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
