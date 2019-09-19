<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreImageRequest;

class ImagesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreImageRequest $request)
    {
        \App\Image::create([
            'alt' => $request->alt,
            'url' => $request->file('url')->hashName(),
        ]);

        $path = $request->file('url')->store('public/images');
        
        return redirect()->back()->with([
            'status' => 'Create Success'
        ]);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $item = \App\Image::find($id);
        unlink(public_path().'/storage/images/'.$item->url);
        $item->delete();

        return redirect()->back()->with([
            'status' => 'Delete Success'
        ]);
    }
}
