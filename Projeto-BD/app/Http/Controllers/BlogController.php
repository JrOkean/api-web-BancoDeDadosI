<?php

namespace App\Http\Controllers;

use App\Models\ModelBlog;
use Illuminate\Http\Request;
use App\Models\ModelUsuario;

class BlogController extends Controller
{
    private $objBlog;
    private $objUsuario;

    public function __construct(){
        $this->objBlog = new ModelBlog();
        $this->objUsuario = new ModelUsuario();
    }
    public function index()
    {
        $blogs= $this->objBlog->all();
        return view('Blog/index', compact('blogs'));
    }

    public function create()
    {
        return view('Blog/create');
    }

    public function store(Request $request)
    {
        $date = now();
        $cadastro=$this->objBlog->create([
            'data_criacao'=>$date,
            'titulo'=>$request->titulo,
            'assunto'=>$request->assunto,
        ]);
        if($cadastro){
            return redirect()->route('blog.index');
        }
    }

    public function show(string $id)
    {
        $blog = $this->objBlog->find($id);
        return view('Blog\show', compact('blog'));
    }

    public function edit(string $id)
    {
        $blog = $this->objBlog->find($id);
        return view('Blog\create', compact('blog'));
    }

    public function update(Request $request, string $id)
    {
        $this->objBlog->where(['id_blog'=>$id])->update([
            'titulo'=>$request->titulo,
            'assunto'=>$request->assunto,
        ]);
        return redirect()->route('blog.mostre', ['id' => $id]);
    }

    public function destroy(string $id)
    {
        $blog = $this->objBlog->find($id);
        if (!$blog) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog excluído com sucesso.');
    }
}
