<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $item = \App\Category::all();
        return view('category')->with([
            'items' => $item
        ]);
    }

    public function create()
    {
        //
    }

    public function store(CategoryStoreRequest $request)
    {
        \App\Category::create($request->all());
        return redirect()->route('admin.index')->with([
            'status' => 'Create Success'
        ]);
    }

    public function show($id)
    {
        return view('category.show')->with([
            'items' => \App\Category::where('name', $id)->get()
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(CategoryStoreRequest $request, $id)
    {
        $item = \App\Category::find($id);
        $item->update($request->all());

        return redirect()->route('admin.index')->with([
            'status' => $item->name . ' Create Success'
        ]);
    }

    public function destroy($id)
    {
        \App\Category::destroy($id);
        return redirect()->route('admin.index')->with([
            'status' => $id . ' Delete Success'
        ]);
    }
}
