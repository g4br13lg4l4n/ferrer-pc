<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];

    public function serchDataToProduct()
    {
        return $this->hasMany('App\Producto');
    } 
}
