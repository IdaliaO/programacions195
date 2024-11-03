<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vista extends Controller 
{
    public function index() 
    {
        return view('inicio');
    }

    public function funciones(Request $request)
    {
        $resultado=null;
        if($request->isMethod('post')){
            $valor=$request->input('valor');
            $unidad=$request->input('unidad');
            if(is_numeric($valor)){
                $valor=floatval($valor);
                switch($unidad){
                    case'mb_a_gb':
                    $resultado="$valor MB =". number_format($valor/1024,3). "GB";
                    break;
                    case'gb_a_mb':
                    $resultado="$valor GB =". number_format($valor*1024,3). "MB";
                    break;  
                    case'gb_a_tb':
                    $resultado="$valor GB =". number_format($valor/1024,3). "TB";
                    break;
                    case'tb_a_gb':
                    $resultado="$valor TB =". number_format($valor/1024,3). "GB";
                    break;
                    default:
                    $resultado="Error en la conversion";
                }
            }
            else{
                $resultado="Error en el numero ingresado";
            }
        } 
        return view('operaciones', ['resultado'=> $resultado]);
    }
}
