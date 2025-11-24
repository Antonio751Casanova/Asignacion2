<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', [PaginaController::class, 'mostrarBienvenida']);
Route::get('/saludo/{nombre}', [PaginaController::class, 'mostrarSaludo']);
Route::get('/productos', [ProductoController::class, 'index']);