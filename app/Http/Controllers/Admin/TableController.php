<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'guest_number' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);
        $newTable = $request->all();
        Table::create($newTable);
        return redirect()->route('admin.tables.index')->with('success', 'New Table Created Successfully.');
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
    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        $request->validate([
            'name' => 'required|max:255',
            'guest_number' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);
        $newTable = $request->all();
        $table->update($newTable);
        return redirect()->route('admin.tables.index')->with('success', 'Table Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();
        $table->reservations()->delete();
        return redirect()->route('admin.tables.index')->with('success','Table Deleted Successfully.');
    }
}
