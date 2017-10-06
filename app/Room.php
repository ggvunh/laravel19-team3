<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['room_name', 'room_price', 'room_status', 'description', 'amount_people', 'room_type_id', 'service_hotel_id', 'image_id'];
    public $timestamps = false;
}
