<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Code extends Model
{
    protected $table = 'user_codes';
    protected $title = ['username', 'code', 'user_id'];
    public $timestamps = false;
}
