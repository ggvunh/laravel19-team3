<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['room_name', 'room_price', 'room_status', 'description', 'amount_people', 'room_type_id', 'service_hotel_id', 'image_id'];

    public $timestamps = false;

    public function images()
    {
    	return $this->hasMany('App\Image', 'image_id', 'id');
    }

    public function room_types()
    {
    	return $this->hasMany('App\Room_Type', 'room_type_id', 'id');
    }
    
    public function service_hotels()
    {
    	return $this->hasMany('App\Service_Hotel', 'service_hotel_id', 'service_hotel_id');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\Booking', 'App\Book_Room', 'room_id', 'booking_id');
    }
}
