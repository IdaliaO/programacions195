<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{
    
public function abrirFormulario(){
    return view('formFrituras');
 
}

    public function authorize($solicitud)
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'txtnombre' => 'required',
            'txtsabor' => 'required',
            'txtpeso' => 'required',
        ];
    }

    $usuario = $solicitud->input('txtnombre');
       session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
       return to_route('rutaFrituras');

}