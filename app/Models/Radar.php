<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Radar extends Model
{
    protected $table = 'radar';

     protected $fillable = [
        'name', 
    ];

    public function category_radar()
    {
    	return $this->hasMany('App\Models\category_radar', 'radar_id', 'id');
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
    public function isSuperAdmin()
    {
        if($this->role_id == 3)
        {
            return true;        
        }
        else
        {
            return false;
        }
    }

    public function isAdmin()
    {
        if($this->role_id == 1)
        {
            return true;        
        }
        else
        {
            return false;
        }
    }

    public function isUser()
    {
        if($this->role_id == 2)
        {
            return true;        
        }
        else
        {
            return false;
        }
    }    
}
