<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorFrituras;



Route::get('/', [ControladorFrituras::class, 'formFrituras'])->name('rutaFrituras');


