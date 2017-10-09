<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceFood extends Model
{
    protected $table = 'service_foods';
    protected $fillable = ['service_name','service_price', 'description'];
    public $timestamps = false;

    public function book_service()
    {
    	return $this->belongsTo('App\Book_Room_Service', 'service_food_id', 'id');
    }
}
