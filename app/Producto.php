<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    public static function search($val)
    {
        return Producto::where('name', 'LIKE', '%'.$val.'%')->get();
    }
}
