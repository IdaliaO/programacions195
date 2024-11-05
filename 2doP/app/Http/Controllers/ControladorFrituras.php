<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorFrituras extends Controller
{
    
public function abrirFormulario(){
    return view('formFrituras');
 
}

public function guardarFritura(Request $solicitud)
{
    $validatedData = $solicitud->validate([
        'txtnombre' => 'required',
        'txtsabor' => 'required',
        'txtpeso' => 'required',
    ]);
    $usuario = $solicitud->input('txtnombre');
    session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
    return redirect()->back()->with('exito', 'Fritura guardada correctamente.');

}
}