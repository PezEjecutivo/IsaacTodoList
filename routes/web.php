<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Index;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/usuarios", [Controller::class, "getUsuarios"]);

Route::get("/enemigos", [Index::class, "index"]);

//Ruta que con el id de enemigos carga los datos y se los pasa al formulario de edicino
Route::get('/enemigos/{id}/edit', Index::class . '@edit');

//Ruta para cargar la vista de creaccion
Route::get('/enemigos/create', Index::class . '@create');

//guarda en bd los datos de la discote
Route::post('/enemigos', Index::class . '@store');

//Ruta para que muestre los datos de una discoteque
Route::get('/enemigos/{id}', Index::class . '@show');


//Ruta que guarda datos en la bd
Route::put('/enemigos/{id}', Index::class . '@update');

//Eliminamos la enemigos con id que recibe
Route::delete('/enemigos/{id}', Index::class . '@destroy');
