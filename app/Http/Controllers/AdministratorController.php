<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Brand;
use App\Category;
use App\CategoryAndBrandAndProducto;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:administrator');
    }

    public function index()
    {
    //    $Product = new Producto();
        $products = Producto::paginate(25);
        $brands = Brand::all();
        $categories = Category::all();

        return view('administrator.dashboard', [
           'products' => $products,
           'brands'    => $brands,
           'categories' => $categories,
        ]);
    }

    public function addProduct(Request $request)
    {
        if($request->file('image')){
            $archivo = $request->file('image');
            $nombre_original = $archivo->getClientOriginalName();
            $save = $archivo->store('uploads', 'public');
            $ruta  =  'storage/'.$save;
        }else{
            $ruta = '';
        }
        

        $productos = Producto::create([
            'code' => $request->code,
            'name' => $request->name,
            'category_id' =>  $request->category,
            'brand_id' => $request->brand,
            'cost_public' => $request->cost_public,
            'cost_middle_distributor' => $request->cost_middle_distributor,
            'cost_distributor' => $request->cost_distributor,
            'reduction_public' => $request->reduction_public,
            'reduction_middle_distributor' => $request->reduction_middle_distributor, 
            'reduction_distributor' => $request->reduction_distributor,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $ruta,
            'status' => $request->status
        ]); 
    
    $insertedId = $productos->id;

    CategoryAndBrandAndProducto::create([
       'producto_id' => $insertedId,
        'category_id' => $request->category,
        'brand_id' => $request->brand
    ]);
        return redirect('/admin/'); 
    }

    public function getProduct(Producto $product)
    {
       print($product); 
    } 

    public function editProduct(Producto $product)
    {

       $brands = Brand::all();
       $category = Category::all();

       $brandSelect = Brand::find($product->brand_id);
       $categorySelect = Category::find($product->category_id);


        return view('administrator.viewAdmin.editProduct',[ 
            'product'   => $product,
            'brands'    => $brands,
            'brandSelect' => $brandSelect,
            'category'    => $category,
            'categorySelect' => $categorySelect,

        ]);
    
    }

    public function updateProduct(Request $request)
    {
       
        Producto::where('id', $request->id)
            ->update([
                'code' => $request->code,
                'name' => $request->name,
                'brand_id'=> $request->brand,
                'category_id' =>  $request->category,
                'cost_public' => $request->cost_public,
                'cost_middle_distributor' => $request->cost_middle_distributor,
                'cost_distributor' => $request->cost_distributor,
                'reduction_public' => $request->reduction_public,
                'reduction_middle_distributor' => $request->reduction_middle_distributor, 
                'reduction_distributor' => $request->reduction_distributor,
                'stock' => $request->stock,
                'description' => $request->description,
                'image' => $request->image,
                'status' => $request->status
            ]);
        
        $exist = CategoryAndBrandAndProducto::where('producto_id', $request->id)->get();

        $iterated = false;
        foreach ($exist as $valor) 
        {
            $iterated = true;
            CategoryAndBrandAndProducto::where('producto_id', $request->id)
            ->update([
                'category_id' => $request->category,
                'brand_id' => $request->brand
            ]);
        }
        if (!$iterated) {
            CategoryAndBrandAndProducto::create([
                'producto_id' => $request->id,
                'category_id' => $request->category,
                'brand_id' => $request->brand
            ]);
        }

        return redirect('/admin/');
    }

    public function deleteProduct(Producto $product)
    { 
        
        $product = Producto::find($product->id);
        $product->serchProductToRalations()->delete();
        $product->delete();

        return redirect('/admin/');
    }

    public function searchP(Request $request)
    {
        $Product = new Producto();
        return $Product->search($request->serch);        
    }
}