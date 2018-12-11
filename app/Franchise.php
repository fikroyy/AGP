<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    public function seats() {
        return $this->hasMany('App\Seat');
    }

}
