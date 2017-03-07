<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'news_category';

    public function news()
    {
    	return $this->hasMany('App\Models\News');
    }

    public function video()
    {
        return $this->hasMany('App\Models\Video');
    }

    public function photo()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id');
    }

    public function Category_radar()
    {
        return $this->hasMany('App\Models\Category_radar', 'news_type_id');
    }

    public function scopeVisible($query)
    {
        return $query->where('is_visible', 1);
    }

    public function scopeRegular($query)
    {
        return $query->where('news_type_id', NEWS_TYPE_REGULAR);
    }

    public function scopeParent($query)
    {
        return $query->whereNull('parent_id');
    }

    public function scopeChildren($query)
    {
        return $query->whereNotNull('parent_id');
    }

    public function scopeFillable($query)
    {
        return $query->where('is_fillable',1);
    }

    public function getNameUpperAttribute()
    {
        return strtoupper($this->name);
    }

    public function getNameUcfirstAttribute()
    {
        return ucfirst($this->name);
    }
}
