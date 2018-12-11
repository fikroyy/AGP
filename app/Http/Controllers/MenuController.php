<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    //
    public function home(){
        $menu = Menu::All();
        return view('/Agp/menu', compact('menu'));
    }
}
