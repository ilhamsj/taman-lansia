<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        return view('pages.admin.index')->with([
            'items' => \App\Article::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(StoreArticleRequest $request)
    {
        $image = \App\Image::create($request->all());

        $article = \App\Article::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'image_id' => $image->id,
        ]);

        $category = \App\Category::create([
            'name' => $request->category
        ]);
        
        \App\Blog::create([
            'article_id' => $article->id,
            'category_id' => $category->id,
            'image_id' => $image->id,
        ]);
        
        return redirect()->route('admin.index')->with([
            'status' => 'Create Success'
        ]);
    }

    public function show($id)
    {
        return view('show')->with([
            'item' => \App\Article::find($id)
        ]);
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
        //
    }
}
