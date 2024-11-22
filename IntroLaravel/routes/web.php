<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;


Route::get('/', [clienteController::class, 'home'])->name('rutainicio');
Route::get('/clientes', [clienteController::class, 'index'])->name('rutaclientes');
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaformulario');
Route::post('/cliente', [clienteController::class, 'store'])->name('procesar');

Route::get('/cliente/{id}/edit', [clienteController::class, 'edit'])->name('editarCliente');
Route::put('/cliente/{id}', [clienteController::class, 'update'])->name('actualizarCliente');
Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('eliminarCliente');





// Route :: view('/','inicio');
// Route :: view('/formulario','formulario');
// Route :: view('/clientes','clientes');
// Route:: view('/componentes', 'componentes')->name ('rutacomponentes');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
