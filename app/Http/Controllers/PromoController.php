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

    public function delete($id) {
    	$promo = Promo::find($id);
    	$promo->delete();
    	return redirect(route('admin.promo'))->with('info', 'Promo berhasil dihapus');
    }

    public function add() {
    	return view('admin/admin_add_promo');
    }

    public function store(Request $rq) {
    	$title=$rq->title;
        $code=$rq->code;
        $percentage=$rq->percentage;
        $valid_from=$rq->valid_from;
        $valid_until=$rq->valid_until;
    	
    	$promo=new Promo();
        $promo->title=$title;
        $promo->code=$code;
        $promo->percentage=$percentage;
        $promo->valid_from=$valid_from;
        $promo->valid_until=$valid_until;
        $promo->save();
    	return redirect(route('admin.promo'))->with('info', 'Promo berhasil dibuat!');
    }
}
