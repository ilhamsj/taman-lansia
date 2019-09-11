<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'user_id', 'article_id', 'category_id', 'image_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    
}
