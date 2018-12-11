<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function booking() {
        return $this->hasOne('App\Booking');
    }

    public function franchise() {
        return $this->belongsTo('App\Franchise');
    }
}
