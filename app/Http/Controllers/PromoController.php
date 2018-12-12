<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromoController extends Controller
{
    public function index() {
    	$promos = Promo::all();
    	return view('admin/admin_promo', compact('promos'));
    }
}
