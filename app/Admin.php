<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

// The authentication guard for admin
    protected $guard = 'admin';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'email', 'password',
    ];

     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // defining relationships
    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function promos() {
        return $this->hasMany('App\Promo');
    }
}
