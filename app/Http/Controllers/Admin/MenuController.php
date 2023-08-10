<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.menus.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:225'],
            'price' => ['required'],
            'image' => ['mimes:png,jpg'],
            'description' => ['required'],
        ]);

        $newMenu = $request->all();
        if ($img = $request->file('image')) {
            $path = "menus_img";
            $ext = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($path, $ext);
            $newMenu['image'] = $ext;
        }
        $menu = Menu::create($newMenu);
        if ($request->has('categories')) {
            $menu->categories()->attach($request->categories);
        }
        return redirect()->route('admin.menus.index')->with('success', 'New Menu Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menus.edit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => ['required', 'max:225'],
            'image' => ['mimes:png,jpg'],
            'description' => ['required'],
            'price' => ['required'],
        ]);
        $newMenu = $request->all();
        if ($img = $request->file('image')) {
            $path = "menus_img";
            $ext = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($path, $ext);
            $newMenu['image'] = $ext;
        } else {
            unset($newMenu['image']);
        }
        $menu->update($newMenu);
        if ($request->has('categories')) {
            $menu->categories()->sync($request->categories);
        }
        return redirect()->route('admin.menus.index')->with('success', 'Menu Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $img_name = $menu->image;
        $img_path = public_path('menus_img/' . $img_name);
        if (File::exists($img_path)) {
            File::delete($img_path);
        }
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu Deleted Successfully.');
    }
}
