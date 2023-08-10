<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
   public function index(){
      Session::put('active' , 'menus.index');
    $menus = Menu::all();
    return view('menus.index', compact('menus'));
   }
}
