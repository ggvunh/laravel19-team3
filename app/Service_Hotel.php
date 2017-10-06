<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Hotel extends Model
{
    protected $table = 'service_hotels';
    protected $fillable = ['service_name','service_price', 'description'];
    public $timestamps = fales;
}
