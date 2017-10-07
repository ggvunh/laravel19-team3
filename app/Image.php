<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['url','description'];
    public $timestamps = false;
    
    public function room()
    {
    	return $this->hasMany('App\Room', 'image_id', 'id');
    }
}
