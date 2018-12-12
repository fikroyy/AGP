<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function index() {
    	$bookings = Booking::all();
    	return view('admin/admin_booking', compact('bookings'));
    }
}
