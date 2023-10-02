<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUsuario;

class UsuarioController extends Controller
{   
    private $objUser;
    public function __construct(){
        $this->objUser = new ModelUsuario();
    }

    public function index()
    {
        $users = $this->objUser->all();
        return view('Usuario/index', compact('users'));
    }

    public function create()
    {
        return view('Usuario/create');
    }

    public function store(Request $request)
    {
        $cadastro=$this->objUser->create([
            'user_name'=>$request->user_name,
            'senha'=>$request->senha,
            'primeiro_nome'=>$request->primeiro_nome,
            'sobrenome'=>$request->sobrenome
        ]);
        if($cadastro){
            redirect('/usuarios');
        }
    }

    public function show(string $id)
    {
        $usuario = $this->objUser->find($id);
        return view('Usuario\show', compact('usuario'));
    }

    public function edit(string $id)
    {
        $usuario = $this->objUser->find($id);
        return view('Usuario\create', compact('usuario'));
    }

    public function update(Request $request, string $id)
    {
        $this->objUser->where(['id_usuario'=>$id])->update([
            'user_name'=>$request->user_name,
            'senha'=>$request->senha,
            'primeiro_nome'=>$request->primeiro_nome,
            'sobrenome'=>$request->sobrenome
        ]);
        return redirect('api/usuarios');
    }

    public function destroy(string $id)
    {
        $usuario = $this->objUser->find($id);
        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso.');
    }

    public function cria_blog($id){

        $usuario = $this->objUser->find($id);
        return view('Usuario\show', compact('usuario'));
        
    }
}