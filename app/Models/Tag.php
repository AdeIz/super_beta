<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag';

    public function photo()
    {
        return $this->morphedByMany('App\Models\Photo', 'taggable');
    }

    public function video()
    {
        return $this->morphedByMany('App\Models\Video', 'taggable');
    }

    public function news()
    {
        return $this->morphedByMany('App\Models\News', 'taggable');
    }
    
}