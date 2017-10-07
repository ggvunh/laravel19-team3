<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['id', 'room_name', 'room_price', 'room_status', 'description', 'amount_people', 'room_type_id', 'service_hotel_id', 'image_id'];

    public $timestamps = false;

    public function images()
    {
    	return $this->belongsTo('App\Image', 'image_id', 'id');
    }

    public function room_types()
    {
    	return $this->belongsTo('App\Room_Type' , 'room_type_id');
    }
    
    public function service_hotels()
    {
    	return $this->belongsTo('App\Service_Hotel', 'service_hotel_id', 'id');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\Booking', 'App\Book_Room', 'room_id', 'booking_id');
    }
}
