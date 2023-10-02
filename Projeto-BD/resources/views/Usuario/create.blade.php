@extends('templates.template')

@section('content')
<h1 class="text-center"> @if(isset($usuario)) Editar @else Cadastrar @endif</h1><hr>
<div class="col-8 m-auto">
  @if(isset($usuario))
  <form name="formEdit" id="formEdit" action="{{route('usuarios.update', ['id' => $usuario->id_usuario])}}"  method="post">
    @method('PUT')
  @else
  <form name="formCad" id="formCad" method="post" action="{{route('usuarios.store')}}"> 
  @endif  
    @csrf
    <input class="form-control" type="text" name="user_name" id="user_name" placeholder="Nome de usuário" value="{{ isset($usuario) ? $usuario->user_name : '' }}"> 
    <input class="form-control" type="text" name="senha" id="senha" placeholder="Senha" value="{{ isset($usuario) ? $usuario->senha: '' }}">
    <input class="form-control" type="text" name="primeiro_nome" id="primeiro_nome" placeholder="Primeiro Nome" value="{{ isset($usuario) ? $usuario->primeiro_nome : '' }}">
    <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="{{ isset($usuario) ? $usuario->sobrenome : '' }}">
    <input class="btn btn-primary" type="submit" value="@if(isset($usuario)) Editar @else Cadastrar @endif">
  </form>
</div>  
@endsection