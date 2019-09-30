<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function gallery() {
        $img = \File::allFiles(public_path('images'));
        return view('admin.gallery')->with([
            'images' => $img,
            'no' => 1
        ]);
    }

    public function deleteImage($image) {

        $src = 'images/'.$image;
        if (\File::exists($src) == true) {
            unlink($src);
        }

        return redirect()->back()->with([
            'status' => 'Sukses'
        ]);
    }
}
