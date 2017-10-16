<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Hotel extends Model
{
    protected $table = 'service_hotels';
    protected $fillable = ['service_name','service_price', 'description'];
    public $timestamps = false;

    public function bookService()
    {
    	return $this->belongsTo('App\Book_Room_Service','service_id');
    }
}
