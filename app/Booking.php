<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['user_id', 'check_in_date', 'check_out_date', 'status'];
    public $timestamps = false;

    public function room()
    {
        return $this->belongsToMany('App\Room', 'book_rooms');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
