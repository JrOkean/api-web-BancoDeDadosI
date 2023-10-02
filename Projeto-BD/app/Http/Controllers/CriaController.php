<?php

namespace App\Http\Controllers;

use App\Models\ModelBlog;
use App\Models\ModelCria;
use App\Models\ModelUsuario;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UsuarioController;

class CriaController extends Controller
{
    private $objUsuario;
    private $objBlog;
    private $objCriado;

    public function __construct(){
        $this->objUsuario = new ModelUsuario();
        $this->objBlog = new ModelBlog();
        $this->objCriado = new ModelCria();
    }

    public function index()
    {
        $criacoes = ModelCria::with(['perfilCria', 'blogCriado'])->get();
        return view('Cria/index', compact('criacoes'));
    }
    public function create($id_usuario, $id_blog)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $criacoes = ModelCria::whereHas('perfilCria', function ($query) use ($id) {
            $query->where('id_usuario', $id);
        })
            ->with(['perfilCria', 'blogCriado'])
            ->get();
        return view('Cria/show', compact('criacoes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
