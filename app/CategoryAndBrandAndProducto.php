<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;
class CategoryAndBrandAndProducto extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    public function getTableRationProducto()
    {
       // $relations = $this->belongsTo(Producto::class);
        return  $relations;
    }
    public function getTableRalationCategory()
    {
        return $this->hasMany('App\CategoryAndBrandAndProducto');
    }

}
