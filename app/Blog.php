<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'article_id', 'category_id', 'image_id'
    ];
    
    public function article()
    {
        return $this->belongsTo('App\Article');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }
}
