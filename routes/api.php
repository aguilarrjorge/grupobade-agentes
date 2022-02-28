<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\agenteController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\cursoDeAgenteController;
use App\Http\Controllers\procesoMetlifeController;

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

//RUTAS DE USER
Route::get('/user',[userController::class,'index']);
Route::post('/user',[userController::class,'create']);
Route::put('/user/{id}',[userController::class,'update']);
Route::delete('/user/{id}',[userController::class,'delete']);

//RUTAS AGENTES
Route::get('/agentes',[agenteController::class,'index']);//lee todos los agentes en la DB
Route::post('/agentes',[agenteController::class,'create']); //crea un registro en la tabla agentes de la DB
Route::put('/agentes/{id}',[agenteController::class,'update']); //actualiza un registro de la tabla agentes 
Route::delete('/agentes/{id}',[agenteController::class,'destroy']); //elimina un registro en la tabla agentes

//RUTAS CURSOS
Route::get('/cursos',[cursoController::class,'index']);
Route::post('/cursos',[cursoController::class,'create']);
Route::put('/cursos/{id}',[cursoController::class,'update']);
Route::delete('/cursos/{id}',[cursoController::class,'delete']);

//RUTAS CURSO DE AGENTES
Route::get('/cursos-de-agente',[cursoDeAgenteController::class,'index']); //lee todos los cursos
Route::post('/cursos-de-agente',[cursoDeAgenteController::class,'create']); // crea un registro en la tabla curso de agente
Route::put('/cursos-de-agente/{id}',[cursoDeAgenteController::class,'update']); //actualiza un registro el la tabla curso de agentes
Route::delete('cursos-de-agente/{id}',[cursoDeAgenteController::class,'delete']); //elimina un registro de la tabla curso de agentes

//RUTAS PROCESO METLIFE
Route::get('/proceso-metlife',[procesoMetlifeController::class,'index']); //lee todos los cursos
Route::post('/proceso-metlife',[procesoMetlifeController::class,'create']); // crea un registro en la tabla curso de agente
Route::put('/proceso-metlife/{id}',[procesoMetlifeController::class,'update']); //actualiza un registro el la tabla curso de agentes
Route::delete('proceso-metlife/{id}',[procesoMetlifeController::class,'delete']); //elimina un registro de la tabla curso de agentes
