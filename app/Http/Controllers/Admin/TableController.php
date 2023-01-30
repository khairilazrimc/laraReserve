<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TableStoreRequest;

class TableController extends Controller
{

    public function index()
    {
        $tables = Table::all();
        return view('admin.tables.index', compact('tables'));
    }

    public function create()
    {
        return view('admin.tables.create');
    }

    public function store(TableStoreRequest $request)
    {
        $image = $request->file('image')->store('public/menus');
        Table::create([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
            'image' => $image
        ]);
        return to_route('admin.tables.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }

    public function update(Request $request, Table $table)
    {
        $request->validate([
            'name' => 'required',
            'guest_number' => 'required',
            'status' => 'required',
            'location' => 'required'
        ]);
        $image = $table->image;
        if($request->hasFile('image')) {
            Storage::delete($table->image);
            $image = $request->file('image')->store('public/tables');
        }
        // $table->update($request->validated()); // shown in video, without image
        $table->update([
            'name' => $request->name,
            'guest_number' => $request->guest_number,
            'status' => $request->status,
            'location' => $request->location,
            'image' => $image
        ]);
        return to_route('admin.tables.index');
    }

    public function destroy(Table $table)
    {
        Storage::delete($table->image);
        $table->delete();
        return to_route('admin.tables.index');
    }
}
