<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class clienteController extends Controller

{

    public function home()
    {
        return view('inicio');
    }

    /**
     * Muestra la consulta CRUD
     */
    public function index()
    {
        $consultaClientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Lo usamos para ejecutar el insert
     */
    public function store(validadorCliente $request)
{
    DB::table('clientes')->insert([
        'Nombre' => $request->input('txtnombre'),
        'Apellido' => $request->input('txtapellido'),
        'Correo' => $request->input('txtcorreo'),
        'Telefono' => $request->input('txttelefono'),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    $usuario = $request->input('txtnombre');
    session()->flash('exito', 'Se guardó el usuario: ' . $usuario);

    return to_route('rutaformulario');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        if (!$cliente) {
            return redirect()->route('rutaclientes')->with('error', 'Cliente no encontrado');
        }   
        return view('editar', compact('cliente'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
{
    DB::table('clientes')
        ->where('id', $id)
        ->update([
            'Nombre' => $request->input('txtnombre'),
            'Apellido' => $request->input('txtapellido'),
            'Correo' => $request->input('txtcorreo'),
            'Telefono' => $request->input('txttelefono'),
            'updated_at' => Carbon::now(),
        ]);

    session()->flash('success', 'Cliente actualizado correctamente');
    return redirect()->route('rutaclientes');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();
            session()->flash('success', 'Cliente eliminado correctamente');
            return redirect()->route('rutaclientes');
    }
    
}
