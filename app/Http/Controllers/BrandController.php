<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
    public function addBrand(Request $request)
    {
        Brand::create([
            'nameBrand' => $request->brand,
        ]);

        return redirect('/admin/'); 
    }

    public function deleteBrand(Brand $brand)
    {

        $brand = Brand::find($brand->id);
        $brand->serchDataToProduct()->delete();
        $brand->delete();

        return redirect('/admin/');

    } 



}
