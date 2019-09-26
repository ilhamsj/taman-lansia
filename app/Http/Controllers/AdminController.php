<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $user = \App\User::orderBy('created_at', 'desc')->get();
        $article = \App\Article::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard')->with([
            'items' => [
                'user' => count($user),
                'article' => count($article),
            ]
        ]);
    }

    public function user()
    {
        return view('admin.user')->with([
            'users' => \App\User::orderBy('created_at', 'desc')->get(),
            'no' => 1,
        ]);
    }

    public function article()
    {
        return view('admin.article')->with([
            'articles' => \App\Article::orderBy('created_at', 'desc')->get(),
            'no' => 1,
        ]);
    }
}
