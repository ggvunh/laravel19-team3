<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Detail extends Model
{
    protected $table = 'user_details';
    protected $title = ['first_name', 'last_name', 'address', 'city', 'province', 'country', 'email', 'phone'];
    public $timestamps = false;
}
