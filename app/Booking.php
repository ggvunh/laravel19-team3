<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['user_id', 'check_in_date', 'check_out_date', 'status', 'booking_code', 'total', 'promotion_id'];
    public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room','book_rooms');
    }

    // Booking Management
    public function bookRooms()
    {
        return $this->hasMany('App\Book_Room','booking_id');
    }

<<<<<<< HEAD
    // public function promotion()
    // {
    //     return $this->belongsToMany('App\promotion');
    // }
=======
    public function promotion()
    {
        return $this->belongsTo('App\Promotion', 'promotion_id', 'id');
    }
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
}
