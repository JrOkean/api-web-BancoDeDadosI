@extends('templates.template')

@section('content')
<h1 class="text-center"> Visualizar </h1></hr>
<div class="col-8 m-auto">
    ID: {{$usuario->id_usuario}} <hr>
    Nick: {{$usuario->user_name}} <hr>
    Nome: {{$usuario->primeiro_nome}} <hr>
    Sobrenome: {{$usuario->sobrenome}} <hr>
    Senha: {{$usuario->senha}} <hr>
</div>
@endsection