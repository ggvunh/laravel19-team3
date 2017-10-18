<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_Room_Service extends Model
{
    protected $table = 'book_room_services';
    protected $fillable = ['book_room_id', 'unit','service_id'];
    public $timestamps = false;
}
