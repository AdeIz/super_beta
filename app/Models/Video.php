<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';

    public function videoContent()
    {
    	return $this->hasMany('App\Models\VideoContent');
    }

    public function comment()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function tag()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category'); 
    }

    
}