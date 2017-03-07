<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel2 extends Model
{
    protected $table = 'news_model_2';

    public function news()
    {
    	return $this->belongsTo('App\Models\News');
    }
}
