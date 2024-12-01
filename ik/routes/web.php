<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::view('/','inicio')->name('rutainicio');
Route::resource('clientes', ClienteController::class);