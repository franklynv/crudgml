<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('admins',App\Http\Controllers\AdminController::class);
Route::resource('usuarios',App\Http\Controllers\UsuarioController::class);
Route::resource('perfils',App\Http\Controllers\PerfilController::class);
Route::resource('rutagps',App\Http\Controllers\RutagpController::class);
