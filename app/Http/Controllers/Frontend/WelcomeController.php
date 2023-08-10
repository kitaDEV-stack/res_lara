<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WelcomeController extends Controller
{
    public function index(){
        Session::put('active' , 'home');
        $specials = Category::where('name','specials')->first();

        return view('welcome',compact('specials'));
    }
}
