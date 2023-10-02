<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\SegueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rota para as funções de Usuarios:
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuario/{id}', [UsuarioController::class, 'show']);
Route::get('/usuarios/create', [UsuarioController::class, 'create']);

// Rota para as funções de Perfil:
Route::get('/perfis', [PerfilController::class, 'index']);

// Rota para as funções de Segue: