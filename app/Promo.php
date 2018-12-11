<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public function admin() {
        return $this->belongsTo('App\Admin');
    }

    public function users() {
        return $this->belongsToMany('App\User');
    }
}
