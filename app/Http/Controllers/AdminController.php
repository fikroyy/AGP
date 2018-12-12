<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Booking;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminDashboard()
    {   
        $bookings = Booking::all();
        return view('admin/admin_booking', compact('bookings'));
    }
    public function redirectToBooking()
    {   
        return redirect()->route('admin.booking');
    }
}
