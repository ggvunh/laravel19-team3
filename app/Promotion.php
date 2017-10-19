<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected $fillable = ['code', 'discount'];
    public $timestamps = false;
    
    public function booking_room()
	{
		return $this->hasMany('App\Booking');
	}
}
