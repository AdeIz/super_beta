<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhotoContent extends Model
{
    protected $table = 'photo_content';

    public function photo()
    {
    	return $this->belongsTo('App\Models\Photo');
    }
}