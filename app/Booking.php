<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['user_id', 'check_in_date', 'check_out_date', 'status'];
    public $timestamps = fales;

     public function rooms()
    {
        return $this->belongsToMany('App\Room', 'App\Book_Room', 'room_id', 'booking_id');
    }
}
