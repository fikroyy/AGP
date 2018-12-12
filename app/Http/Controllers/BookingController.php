<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{

    public function Insert()
    {
        return view('Booking');
            // 'name' => $data['name'],
            // 'book_time' => $data['book_time'],
            // 'book_date' => $data['book_date'],
            // 'phone' => $data['phone'],
            // 'people_amount' => $data['people_amount'],
    }
    public function store(Request $rq){
        $name=$rq->name;
        $book_date=$rq->book_date;
        $book_time=$rq->book_time;
        $phone=$rq->phone;
        $people_amount=$rq->people_amount;

        $Booking=new Booking();
        $Booking->name=$name;
        $Booking->book_date=$book_date;
        $Booking->book_time=$book_time;
        $Booking->phone=$phone;
        $Booking->people_amount=$people_amount;
        $Booking->save();
        return back();
    }
}
