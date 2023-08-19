<?php

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

/**
 * @OA\Info(
 *    title="Atvd.1 J. S. Raposo-202000066875",
 *    description="Uma simples experimentação de rota,
 *    considerando uma requisição POST e uma GET",
 *    version="0.0.0"
 * )
 */

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/usuarios', function (Request $request) {

    //$todos = $request->all();

    $validatedData = $request->validate([
        'cpf' => 'required|digits_between:0,11',
        'nome' => 'required|string',
        'data_nascimento' => 'required|date',
    ]);

    $filename = 'usuario';

    file_put_contents(
        $filename,
        json_encode($validatedData),
    );

    return response()->json(['message' => 'Dados do usuário armazenados com sucesso', 'usuario' => $validatedData]);
});

Route::get('/usuarios', function () {
    //$use_include_path = '/public/usuario';
    $filename = 'usuario';
    $usuario = file_get_contents($filename);

    if($usuario){
        return response()->json(['usuario' => json_decode($usuario)]);
    };
        return response()->json(['message' => 'ERROR 404 REMOVE LIFE']);
});

Route::get('/documentation', function () {
    return view('swagger');
});
