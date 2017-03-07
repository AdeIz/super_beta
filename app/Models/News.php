<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }

    public function newsModel1()
    {
    	return $this->hasMany('App\Models\NewsModel1');
    }

    public function newsModel2()
    {
    	return $this->hasMany('App\Models\NewsModel2');
    }

    public function newsModel3()
    {
    	return $this->hasMany('App\Models\NewsModel3');
    }

    public function newsType()
    {
    	return $this->belongsTo('App\Models\NewsType');
    }

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');	
    }

    public function newsSequence()
    {
    	return $this->belongsToMany('App\Models\NewsSequence')->withTimestamps();
    }
    
    public function tag()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
    
    public function comment()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
