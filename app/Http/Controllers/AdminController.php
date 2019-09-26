<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard')->with([
            'users' => \App\User::orderBy('created_at', 'desc')->get(),
            'articles' => \App\Article::orderBy('created_at', 'desc')->get(),
            'no' => 1,
        ]);
    }

    public function user()
    {
        return view('admin.user')->with([
            'items' => \App\User::all(),
        ]);
    }

    public function article()
    {
        return view('admin.article')->with([
            'items' => \App\Article::all(),
        ]);
    }
}
