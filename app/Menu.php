<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function bookings() {
        return $this->belongsToMany('App\Booking');
    }
}
