<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

Route::post('/guests', [RsvpController::class, 'store']);
Route::put('/guests/{id}', [RsvpController::class, 'update']);
Route::delete('/guests/{id}', [RsvpController::class, 'destroy']);
Route::get('/guests', [RsvpController::class, 'index']);

// Opcionalmente, si deseas aplicar el middleware de autenticación a otras rutas
/*
Route::middleware('auth:api')->group(function () {
    // Aquí las rutas que requieran autenticación
});
*/
