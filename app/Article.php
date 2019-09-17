<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id', 'user_id', 'image_id', 'title', 'description',
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
