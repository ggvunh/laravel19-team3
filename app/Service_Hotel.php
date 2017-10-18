<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Hotel extends Model
{
    protected $table = 'service_hotels';
    protected $fillable = ['service_name','service_price', 'description'];
    public $timestamps = false;

    public function bookrooms()
    {
        return $this->belongsToMany('App\Book_Room','book_room_services', 'book_room_id', 'service_id')->withPivot('unit');
    }
}
