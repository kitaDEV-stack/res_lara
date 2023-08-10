<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){
        Session::put('active' , 'categories.index');
        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function show(Category $category){
        
        return view('categories.show',compact('category'));
    }
}
