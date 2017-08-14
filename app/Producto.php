<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Brand;
use App\Category;
use App\CategoryAndBrandAndProducto;
class Producto extends Model
{
    protected $guarded = [];

    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public static function search($val)
    {
        return Producto::where('name', 'LIKE', '%'.$val.'%')->get();
    }

    public function serchProductToRalations()
    {
        return $this->hasMany('App\CategoryAndBrandAndProducto');
    } 

}
