<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
    protected $table = 'room_types';
    protected $fillable = ['id', 'type_of_bed', 'description'];
    public $timestamps = false;

    public function room()
    {
    	return $this->hasMany('App\Room',  'room_type_id');
    }
}
