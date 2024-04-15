<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['name', 'description'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }


}
