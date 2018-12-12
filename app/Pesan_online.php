<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan_online extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function menus() {
        return $this->belongsToMany('App\Menu');
    }

    public function pesan_onlines() {
        return $this->belongsToMany('App\Pesan_online');
    }

    protected $table="orders";
    protected $fillable = ["name", "menu", "pcs", "your_money", "phone", "locate", "time", "level", "note", "voucher"];
}
