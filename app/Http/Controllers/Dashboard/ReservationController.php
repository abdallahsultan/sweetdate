<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;

class ReservationController extends Controller
{

    public function index()
    {
        $reservs = Reservation::latest()->get();

        return view('admin.reserve.index', compact('reservs'));
    }




    public function destroy($id)
    {
        Reservation::findOrFail($id)->delete();

        session()->flash('message', ' Deleted Successfully');

        return redirect('dashboard/reservation');
    }
}
