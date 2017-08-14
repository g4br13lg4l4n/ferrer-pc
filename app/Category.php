<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function serchCategoryToProduct()
    {
        return $this->hasMany('App\Producto');
    } 

    public function searchBrandtoCategory()
    {
        return $this->hasMany('App\Brand');
    }
}
