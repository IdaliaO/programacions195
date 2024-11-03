<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function consulta()
    {
        return view('clientes');
    }

    public function procesarCliente(validadorCliente $solicitud)
    {
       // return 'Llego tu formulario al controlador';

       // imprimimos todo lo que viene en la petición
       // return $solicitud->all();

       // devuelve la ruta de la petición
       // return $solicitud->path();

       // imprime la url completa de la petición
       // return $solicitud->url();

       // muestra la ip del origen de la petición
       // return $solicitud->ip();

       // redirección a la ruta
       // return redirect('/');

       // redirección con nombre de ruta
       // return redirect()->route('rutaclientes');

       // redirección al origen de la petición
       // return back();

       // redirección con variables de retorno
       // $id = [['usuario' => 1], ['usuario' => 2]];
       // return view('formulario', compact('id'));

       $usuario = $solicitud->input('txtnombre');
       session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
       return to_route('rutaformulario');
    }
}
