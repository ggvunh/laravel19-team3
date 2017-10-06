<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceFood extends Model
{
    protected $table = 'service_foods';
    protected $fillable = ['service_name','service_price', 'description'];
    public $timestamps = fales;
}
