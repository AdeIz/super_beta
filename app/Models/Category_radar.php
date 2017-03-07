<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_radar extends Model
{
    protected $table = 'news_category_radar';

    public function news_category()
    {
    	return $this->belongsTo('App\Models\news_category');
    }

    public function radar()
    {
        return $this->belongsTo('App\Models\radar');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category_radar', 'parent_id');
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
