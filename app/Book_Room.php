<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_Room extends Model
{
    protected $table = 'book_rooms';
    protected $fillable = ['room_id', 'booking_id'];
    public $timestamps = false;

    public function services()
    {
    	return $this->belongsToMany('App\Service_Hotel','book_room_services', 'book_room_id', 'service_id')->withPivot('unit');
    }
    public function booking()
    {
        return $this->belongsTo('App\Booking','booking_id');
    }   
    public function room()
    {
        return $this->belongsTo('App\Room','room_id');
    }
}
