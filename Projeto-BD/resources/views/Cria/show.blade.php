@extends('templates.template')

@section('content')
<h1 class="text-center"> Visualizar </h1>
<hr>
<div class="col-8 m-auto">
    @foreach($criacoes as $criacao)
    ID User: {{ $criacao->perfilCria->id_usuario }} <hr>
    Nick: {{ $criacao->perfilCria->user_name }} <hr>

    @if($criacao->blogCriado)
        @foreach($criacao->blogCriado as $blog)
        ID Blog: {{ $blog->id_blog }} <hr>
        Título: {{ $blog->titulo }} <hr>
        @endforeach
    @else
        Sem blogs relacionados <hr>
    @endif

    <a href="{{ route('usuarios.destroy', $criacao->perfilCria->id_usuario) }}" class="btn btn-danger"
        onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</a>
    @endforeach
</div>
@endsection