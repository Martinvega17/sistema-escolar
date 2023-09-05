<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Users

Route::group(['middleware' => ['role:admin']], function () {
    // Rutas para admin
    Route::get('sistema/carreras/create', [App\Http\Controllers\CarreraController::class, 'create'])->name('carreras.create');
    Route::get('sistema/carreras/edit', [App\Http\Controllers\CarreraController::class, 'edit'])->name('sistema.carreras.edit');
});

Route::group(['middleware' => ['role:maestro']], function () {
    // Rutas para maestro
    Route::get('sistema/carreras/edit', [App\Http\Controllers\CarreraController::class, 'edit'])->name('sistema.carreras.edit');
});