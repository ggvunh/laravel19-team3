<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_Room extends Model
{
    protected $table = 'book_rooms';
    protected $fillable = ['room_id', 'booking_id'];
    public $timestamps = fales;
}
