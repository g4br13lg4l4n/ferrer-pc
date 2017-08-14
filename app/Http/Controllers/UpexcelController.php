<?php

namespace App\Http\Controllers;


use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Excel;
use Maatwebsite\Excel\ExcelServiceProvider;
use App\Producto;
class UpexcelController extends Controller
{  
    public function upExcel(Request $request){
        $archivo = $request->file('excel');
        $nombre_original = $archivo->getClientOriginalName();
        $save = $archivo->store('uploads', 'public');
        $ruta  =  'storage/app/public/'.$save;
               
            Excel::load($ruta, function($reader) {

                $reader->each(function($row) {
                    $productos = Producto::create([
                        'code' => $row->code,
                        'name' => $row->name,
                        'cost_public' => $row->cost_public,
                        'cost_middle_distributor' => $row->cost_middle_distributor,
                        'cost_distributor' => $row->cost_distributor,
                        'reduction_public' => '',
                        'reduction_middle_distributor' => '', 
                        'reduction_distributor' => '',
                        'stock' => '',
                        'description' => '',
                        'image' => '',
                        'status' => '',
                    ]);        
                }); 
            });

        return redirect('/admin/'); 
        
    }
/*
    public function getlist(){
        $flights = App\Producto::all();
    }
*/
}
