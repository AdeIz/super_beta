<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';

    public function photoContent()
    {
    	return $this->hasMany('App\Models\PhotoContent');
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