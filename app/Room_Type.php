<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
    protected $table = 'room_types';
    protected $fillable = ['type_of_bed', 'description'];
    public $timestamps = fales;

    public function room()
    {
    	return $this->belongsTo('App\Room', 'room_type_id', 'id');
    }
}
