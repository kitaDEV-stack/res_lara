<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:225'],
            'image' => ['required', 'mimes:png,jpg'],
            'description' => ['required'],
        ]);

        $newCate = $request->all();
        if ($img = $request->file('image')) {
            $path = "categories_img";
            $ext = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($path, $ext);
            $newCate['image'] = $ext;
        }
        Category::create($newCate);
        return redirect()->route('admin.categories.index')->with('success', 'New Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => ['required', 'max:225'],
            'image' => ['mimes:png,jpg'],
            'description' => ['required'],
        ]);
        $newCate = $request->all();
        if ($img = $request->file('image')) {
            $path = "categories_img";
            $ext = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($path, $ext);
            $newCate['image'] = $ext;
        } else {
            unset($newCate['image']);
        }
        $category->update($newCate);
        return redirect()->route('admin.categories.index')->with('success', 'Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $img_name = $category->image;
        $img_path = public_path('categories_img/' . $img_name);
        if (File::exists($img_path)) {
            File::delete($img_path);
        }
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category Deleted Successfully.');
    }
}
