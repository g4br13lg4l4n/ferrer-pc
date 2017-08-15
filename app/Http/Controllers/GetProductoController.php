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
        $products = Producto::paginate(10);
        $brands = Brand::all();
        $categories = Category::all();
        $CBP = CategoryAndBrandAndProducto::all();

         $ms = new CategoryAndBrandAndProducto;
        return $ms->getTableRationProducto();
    }
    
     
}
