<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrar;


Route::get('/', [registrar::class, 'principal'])->name('principal');
Route::get('/registro', [registrar::class, 'registro'])->name('rutaregistro');
Route::post('/registrar-libro', [registrar::class, 'guardarLibro'])->name('libro.guardar');
