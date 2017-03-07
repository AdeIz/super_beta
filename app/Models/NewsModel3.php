<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel3 extends Model
{
    protected $table = 'news_model_3';

    public function news()
    {
    	return $this->belongsTo('App\Models\News');
    }
}
