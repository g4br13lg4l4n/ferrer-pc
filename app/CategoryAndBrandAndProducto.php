<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Producto;
use App\Category;
use App\Brand;
class CategoryAndBrandAndProducto extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    public function getTableRalationCategory()
    {
        return $this->hasMany('App\CategoryAndBrandAndProducto');
    }

     public function getTableRationProducto()
    {
        $all = $this->all()->sortByDesc('category_id');
        $lastCategory = 0;
        $cont = 0;
        foreach ($all as $key => $value) {
        //    $CBP[] = array( "Category"=> Category::find($value->category_id), "Brand" => Brand::find($value->brand_id), 
        //    'Producto' => Producto::find($value->producto_id));
            $cat = Category::find($value->category_id);
            $brd = Brand::find($value->brand_id);
            $pord = Producto::find($value->producto_id);

//            $CBP[] = array( "Category" => array( $cat, array( "Brand" => array( $brd, 'Producto' => $pord ) ) ) );
//            $CBP[] = array($value->category_id, array( "Category" => array( $cat, array( "Brand" => array( $brd, 'Producto' => $pord ) ) ) ) );

            if($value->category_id == $lastCategory){
            //    array_push(  $CBP[0], array( $cat, array( "Brand" => array( $brd, 'Producto' => $pord ) ) )  ); si agarra
            //    array_push(  $CBP[], array( $cat, array( "Brand" => array( $brd, 'Producto' => $pord ) ) )  );   error

                array_push($CBP[$cont-1],  array( "Brand" => array( $brd, 'Producto' => $pord ) )  );
                $cuenta = false;
                    
            }else{
            //    $CBP[] = array( "Category" => array( $cat, array( "Brand" => array( $brd, 'Producto' => $pord ) ) ) );
                $CBP[] = array($value->category_id, array( "Category" => array( $cat, array( "Brand" => array( $brd, 'Producto' => $pord ) ) ) ) );
                $cuenta = true;
            }

            $lastCategory = $value->category_id;
            
            if($cuenta){
                $cont++; 
            }
            
        }
        return $CBP;
        
    }

}
