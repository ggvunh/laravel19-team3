<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $title = ['username', 'password', 'role', 'deposit', 'user_detail_id'];
    public $timestamps = false;

    public function user_details()
    {
    	return $this->hasOne('App\User_Detail', 'user_detail_id', 'id');
    }

    public function user_code()
    {
    	return $this->belongsTo('App\User_Code', 'user_id', 'id');
    }
}

