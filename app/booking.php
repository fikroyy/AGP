<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function menus() {
        return $this->belongsToMany('App\Menu');
    }

    public function seat() {
        return $this->hasOne('App\Seat');
    }
    protected $table="bookings";
    protected $fillable = ["name", "book_date", "book_time", "people_amount", "phone"];
}
