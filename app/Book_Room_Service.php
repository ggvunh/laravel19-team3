<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_Room_Service extends Model
{
    protected $table = 'book_room_services';
    protected $fillable = ['book_room_id', 'unit'];
    public $timestamps = fales;

    public function services()
    {
    	return $this->hasMany('App\Service_Hotel', 'service_id', 'id');
    }

    public function bookRoom()
    {
    	return $this->hasOne('App\Book_Room','book_room_id','id');
    }    
}
