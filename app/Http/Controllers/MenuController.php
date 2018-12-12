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
}
