<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail;

class ContactController extends Controller
{

    public function index()
    {
        $mails = Mail::latest()->get();

        return view('admin.mail.index', compact('mails'));
    }


    public function show($id)
    {
        $mail = Mail::findorFail($id);

        $mail->update([ 'status' => 1 ]);

        return view('admin.mail.show', compact('mail'));
    }



    public function destroy($id)
    {

    }
}
