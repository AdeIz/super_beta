<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['body'];

    public function commentable()
    {
        return $this->morphTo();
    }
  
}