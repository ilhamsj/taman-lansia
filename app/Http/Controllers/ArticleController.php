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
            'items' => \App\Article::orderBy('created_at', 'desc')->simplePaginate(5),
            'status' => 'he'
        ]);
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(StoreArticleRequest $request)
    {
        $message = $request->description;
        $dom = new \DomDocument();
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        
		$images = $dom->getElementsByTagName('img');

		// foreach <img> in the submited message
		foreach($images as $img){
			$src = $img->getAttribute('src');
			
			// if the img source is 'data-url'
			if(preg_match('/data:image/', $src)){
				
				// get the mimetype
				preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
				$mimetype = $groups['mime'];
				
				// Generating a random filename
				$filename = uniqid();
				$filepath = "/images/$filename.$mimetype";
	
				// @see http://image.intervention.io/api/
				$image = Image::make($src)
				  // resize if required
				  /* ->resize(300, 200) */
				  ->encode($mimetype, 100) 	// encode file to the specified mimetype
				  ->save(public_path($filepath));
				
				$new_src = asset($filepath);
				$img->removeAttribute('src');
				$img->setAttribute('src', $new_src);
			} // <!--endif
        } // <!--endforeach
        
        dd($dom->saveHTML());
        
        $article = \App\Article::create([
            'user_id'       => $request->user_id,
            'title'         => $request->title,
            'category'      => $request->category,
            'slug'          => Str::slug($request->title),
            'description'   => $dom->saveHTML(),
            'image'         => $request->file('image')->hashName(),
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
