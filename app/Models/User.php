<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userProfile()
    {
        return $this->hasOne('App\Models\UserProfile','user_id', 'id');
    }


    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
	
    public function ads()
    {
        return $this->hasMany('App\Models\Ads');
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
