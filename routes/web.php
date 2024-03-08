<?php

use App\Http\Controllers\EnemigosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Index;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;

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


Route::resource("enemigos", EnemigosController::class);
Route::resource("usuarios", UsuariosController::class);
Route::get('/', [LoginController::class, 'index']);
