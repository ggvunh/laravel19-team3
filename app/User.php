<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = ['first_name', 'last_name', 'password', 'address', 'province', 'country', 'email', 'phone', 'role', 'deposit'];
    public $timestamps = false;

    public function user_code()
    {
    	return $this->belongsTo('App\User_Code', 'user_id', 'id');
    }
}

