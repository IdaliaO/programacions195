<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

// rutas para trabajar con un controlador

Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');
Route::get('/formulario', [ControladorVistas::class, 'mostrarFormulario'])->name('rutaformulario');
Route::get('/clientes', [ControladorVistas::class, 'consulta'])->name('rutaclientes');
Route::post('/enviar', [ControladorVistas::class, 'procesarCliente'])->name('procesar');
Route :: view('/','inicio');
Route :: view('/formulario','formulario');
Route :: view('/clientes','clientes');





// Route :: view('/','inicio');
// Route :: view('/formulario','formulario');
// Route :: view('/clientes','clientes');
// Route:: view('/componentes', 'componentes')->name ('rutacomponentes');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
