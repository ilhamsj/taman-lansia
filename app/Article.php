<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use Searchable;

    protected $fillable = [
        'id', 'user_id', 'image', 'title', 'description', 'category', 'slug'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
