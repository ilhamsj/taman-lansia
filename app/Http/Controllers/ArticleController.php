<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        // dd(\App\Article::all());
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

    public function store(Request $request)
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
        

        \App\Article::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $dom->saveHTML(),
        ]);

        //  $path = $request->file('url')->store('public/images');
        // 'image' => $request->file('url')->hashName(),

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
