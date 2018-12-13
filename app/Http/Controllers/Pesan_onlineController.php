<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan_online;

class Pesan_onlineController extends Controller
{

    public function Insert()
    {
        return view('agp\Pesan_online');
            // 'name' => $data['name'],
            // 'book_time' => $data['book_time'],
            // 'book_date' => $data['book_date'],
            // 'phone' => $data['phone'],
            // 'people_amount' => $data['people_amount'],
    }
    public function store(Request $rq){
        $name=$rq->name;
        $menu=$rq->menu;
        $pcs=$rq->pcs;
        $level=$rq->level;
        $your_money=$rq->your_money;
        $phone=$rq->phone;
        $locate=$rq->locate;
        $time=$rq->time;
        $voucher=$rq->voucher;
        $note=$rq->note;

        $Pesan_online=new Pesan_online();
        $Pesan_online->name=$name;
        $Pesan_online->menu=$menu;
        $Pesan_online->level=$level;
        $Pesan_online->pcs=$pcs;
        $Pesan_online->your_money=$your_money;
        $Pesan_online->phone=$phone;
        $Pesan_online->locate=$locate;
        $Pesan_online->time=$time;
        $Pesan_online->note=$voucher;
        $Pesan_online->note=$note;
        $Pesan_online->status='BELUM KONFIRMASI';
        $Pesan_online->save();
        return back()->with('info','Pesanan tempat anda telah diproses untuk selanjutnya tunggu konfirmasi dari admin lewat Whatsapp, Trimakasih :).');
    }
    public function index() {
    	$orders = Pesan_online::all();
    	return view('admin/admin_order', compact('orders'));
    }

    public function change_status($id) {
        $order = Pesan_online::find($id);
        $order->status = 'SUDAH KONFIRMASI';
        $order->save();

        return redirect(route('admin.order'))->with('info', 'Status order berhasil diubah!');
    }
}
