<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Category;
use App\Brand;
use App\CategoryAndBrandAndProducto;
class GetProductoController extends Controller
{
    public function getProducto()
    {
    //    $relations = CategoryAndBrandAndProducto::belongsTo(Producto::class);
    //    return  CategoryAndBrandAndProducto::all();

    //    $categories = Category::all();
    //    return $categories->brand()->attach();
    
    $category = new Category();
    return $category->searchBrandtoCategory();
   // $category->searchBrandtoCategory()->attach($roleId);

    }
    
}
