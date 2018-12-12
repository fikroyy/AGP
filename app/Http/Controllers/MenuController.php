<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    //
    public function home(){
        $menu = Menu::All();
        return view('/agp/menu', compact('menu'));
    }

    public function index(){
        $menus = Menu::All();
        return view('/admin/admin_menu', compact('menus'));
    }

    public function delete($id) {
    	$menu = Menu::find($id);
    	$menu->delete();
    	return redirect(route('admin.menu'))->with('info', 'Menu berhasil dihapus');
    }

    public function add() {
    	return view('admin/admin_add_menu');
    }

    public function store(Request $rq) {
    	$title=$rq->title;
        $description=$rq->description;
        $price=$rq->price;
        $stock=$rq->stock;
        $images="";
    	
    	$menu=new menu();
        $menu->title=$title;
        $menu->description=$description;
        $menu->price=$price;
        $menu->stock=$stock;
        $menu->images=$images;
        $menu->save();
    	return redirect(route('admin.menu'))->with('info', 'Menu berhasil dibuat!');
    }
}
