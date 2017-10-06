<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['url','description'];
    public $timestamps = fales;
    
    public function room()
    {
    	return $this->belongsTo('App\Room', 'image_id', 'id');
    }
}
