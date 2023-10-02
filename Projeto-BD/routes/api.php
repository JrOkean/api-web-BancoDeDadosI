<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CriaController;
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
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/{id}', [UsuarioController::class, 'show'])->name('usuario.mostre');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuario.crie');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/delete/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

// Rota para as funções de Blog:
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.mostre');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.crie');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

// Rota para as funções de Usuario_Cria:
Route::get('/criacoes', [CriaController::class, 'index'])->name('criacoes.index');
Route::get('/criacoes/{id}', [CriaController::class, 'show'])->name('criacoes.mostre');