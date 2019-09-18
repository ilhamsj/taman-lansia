<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index')->with([
            'items' => \App\Article::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('article.create')->with([
            'category' => \App\Category::all()
        ]);
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

        foreach ($request->name as $category) {

            $cat = \App\Category::where('name', $category)->get();

            if ($cat->count() == null) {
                $cat = \App\Category::create([
                    'name' => $category
                ]);
            } else {
                $cat = $cat->first();
            }

            \App\Blog::create([
                'article_id' => $article->id,
                'category_id' => $cat->id,
                'image_id' => $image->id,
            ]);
        }
        
        return redirect()->route('admin.index')->with([
            'status' => 'Create Success'
        ]);
    }

    public function show($id)
    {
        return view('article.show')->with([
            'item' => \App\Article::find($id)
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
