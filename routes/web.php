<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PagoController;

Route::resource('clientes', ClienteController::class);
Route::resource('habitaciones', HabitacionController::class);
Route::resource('reservas', ReservaController::class);
Route::resource('pagos', PagoController::class);

Route::get('/', function () {
    return view('welcome');
});
