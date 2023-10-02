<?php

namespace App\Http\Controllers;

use App\Models\Models\ModelUsuario as ModelsModelUsuario;
use Illuminate\Http\Request;
use App\Models\ModelUsuario;
use App\Models\ModelPerfil;

class UsuarioController extends Controller
{
    private $objUser;
    private $objPerfil;
    public function __construct(){
        $this->objUser = new ModelUsuario();
        $this->objPerfil = new ModelPerfil();
    }

    public function index()
    {
        $users = $this->objUser->all();
        return view('Usuario/index', compact('users'));
    }

    public function create()
    {
        $usuarios = $this->objUser->all();
        return view('Usuario/create', compact(''));
    }

    public function store(Request $request)
    {
        $this->objUser->create([
            'user_name'=>$request->nickname,
            'senha'=>$request->senha,
            'primeiro_nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome
        ]);
        return redirect('/usuarios');
    }

    public function show(string $id)
    {
        $usuario = $this->objUser->find($id);
        return view('Usuario\show', compact('usuario'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
