<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $title = ['username', 'password', 'role', 'deposit', 'user_detail_id'];
    public $timestamps = false;
}
}
