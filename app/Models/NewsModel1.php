<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel1 extends Model
{
    protected $table = 'news_model_1';

    public function news()
    {
    	return $this->belongsTo('App\Models\News');
    }
}
