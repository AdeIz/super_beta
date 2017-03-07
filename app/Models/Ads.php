<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = 'ads';

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
	
	public function adsType()
	{
		return $this->belongsTo('App\Models\AdsType');
	}
}

	