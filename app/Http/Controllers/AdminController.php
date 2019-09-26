<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin')->with([
            'items' => \App\Article::all(),
        ]);
    }

    public function show($id)
    {
        return view('show')->with([
            'item' => \App\User::find($id),
        ]);
    }
}
