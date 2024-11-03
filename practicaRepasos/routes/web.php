<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vista; 

Route::get('/', [vista::class, 'index'])->name('rutainicio'); 
Route::match(['get', 'post'], '/operaciones', [Vista::class, 'funciones'])->name('rutaoperaciones');
