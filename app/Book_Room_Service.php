<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_Room_Service extends Model
{
    protected $table = 'book_room_services';
    protected $fillable = ['service_food_id', 'book_room_id', 'unit'];
    public $timestamps = fales;

    public function service_foods()
    {
    	return $this->hasMany('App\ServiceFood', 'service_food_id', 'id');
    }    
}
