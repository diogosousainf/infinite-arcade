<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        //'image',
        'platform',
        'genre',
        'release_date',
        'developer',
        'rating',
        'price'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


}
