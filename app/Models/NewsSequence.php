<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsSequence extends Model
{
    protected $table = 'news_sequence';

    public function news()
    {
    	return $this->belongsToMany('App\Models\News')->withTimestamps();
    }
}
