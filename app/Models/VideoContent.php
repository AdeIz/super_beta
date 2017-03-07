<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoContent extends Model
{
    protected $table = 'video_content';

    public function video()
    {
    	return $this->belongsTo('App\Models\Video');
    }
}