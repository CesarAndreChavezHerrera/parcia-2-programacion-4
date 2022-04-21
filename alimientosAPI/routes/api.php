<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* listar todos los alimentos */
Route::get('alimentos','App\Http\Controllers\AlimentoController@index');

/* listar un alimento */
Route::get('alimento/{id}','App\Http\Controllers\AlimentoController@show');

/* crear un nuevo registro de alimento */
Route::post('alimento','App\Http\Controllers\AlimentoController@store');

/* actualizar el registro de un alimento */
Route::put('alimento','App\Http\Controllers\AlimentoController@store');

/* eliminar el registro de un alimento */
Route::delete('alimento/{id}','App\Http\Controllers\AlimentoController@destroy');
