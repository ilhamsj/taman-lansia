<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'image_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function blog()
    {
        return $this->hasMany('App\Blog');
    }
}
