<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterRegion extends Model
{
    protected $table = 'radar_attributes';
    protected $primaryKey = 'radar_id';

    public function ads()
    {
    	return $this->hasMany('App\Models\Ads');
    }
}

