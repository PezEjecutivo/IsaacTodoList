<?php

use App\Http\Controllers\EnemigosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Index;
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

//CRUD
Route::resource("enemigos", EnemigosController::class)->middleware('auth');
Route::resource("usuarios", UsuariosController::class)->middleware('auth');

//Registro
Route::get("/login", [UsuariosController::class, "formularioLogin"])->name('login');
Route::post('/login', [UsuariosController::class, 'iniciarSesion'])->name('login.iniciar');
Route::post("/logout", [UsuariosController::class, "logout"]);
//Route::post('/login', \App\Models\UsuariosController "iniciarSesion");
