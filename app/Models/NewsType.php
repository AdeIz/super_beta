<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $table = 'news_type';

    public function news()
    {
    	return $this->hasMany('App\Models\News');
    }
}
