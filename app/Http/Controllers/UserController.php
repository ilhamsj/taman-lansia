<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.index')->with([
            'items' => \App\User::all()
        ]);
    }

    
    public function show($id)
    {
        return view('pages.user.show')->with([
            'item' => \App\User::find($id),
        ]);
    }

    public function kegiatan()
    {
        return view('category.show')->with([
            'items' => \App\Category::where('name', 'kegiatan')->get()
        ]);
    }
}
