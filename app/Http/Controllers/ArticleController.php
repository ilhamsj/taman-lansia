<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index')->with([
            'items' => \App\Article::orderBy('created_at', 'desc')->simplePaginate(5)
        ]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $article = \App\Article::create([
            'user_id' => $request->user_id,
            'image' => $request->file('image')->hashName(),
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
        ]);
        
        $request->file('image')->store('public/images');

        return redirect()->back()->with([
            'status' => 'Create Success'
        ]);
    }

    public function show($id)
    {
        return view('article.show')->with([
            'item' => \App\Article::where('slug', $id)->first()
        ]);
    }

    public function edit($id)
    {
        $item = \App\Article::find($id);
        return view('article.edit')->with([
            'item' => $item
        ]);
    }

    public function update(StoreArticleRequest $request, $id)
    {
        $article = \App\Article::find($id);
        $image = \App\Image::find($article->image->id);
        
        $article->update($request->all());

        return redirect()->route('admin.index')->with([
            'status' => 'Update Success'
        ]);
    }

    public function destroy($id)
    {
        //
    }
}
