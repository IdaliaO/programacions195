<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\registrarlibro;

class registrar extends Controller
{

    public function principal()
    {
        return view('principal'); 
    }
  
    public function registro()
    {
        return view('registro'); 
    }
    
    public function guardarLibro(registrarlibro $solicitud)
    {
       
        $datosLibro = $solicitud->all();      
        return redirect()->route('rutaregistro')->with('exito', "Libro '{$solicitud->txttitulo}' guardado correctamente.");
    }
}
