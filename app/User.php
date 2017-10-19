<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    
    
    protected $fillable = ['first_name', 'last_name', 'password', 'address','country', 'province', 'city',  'email', 'phone_number', 'role', 'deposit'];
    public $timestamps = false;

    // public function user_details()
    // {
    // 	return $this->hasOne('App\User_Detail', 'user_detail_id', 'id');
    // }

    // public function user_code()
    // {
    // 	return $this->belongsTo('App\User_Code', 'user_id', 'id');
    // }

    public function bookings()
    {
        return $this->hasMany('App\Booking', 'user_id');
    }
}

