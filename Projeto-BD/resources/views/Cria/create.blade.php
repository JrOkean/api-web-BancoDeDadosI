@extends('templates.template')

@section('content')
<h1 class="text-center"> Cadastrar </h1><hr>
<div class="col-8 m-auto">
  <form name="formCad" id="formCad" method="post" action="{{route('perfil.store')}}"> 
    @csrf
    <input class="form-control" type="text" name="user_name" id="user_name" placeholder="Nome de usuário" value="{{ isset($perfil) ? $perfil->user_name : '' }}"> 
    <input class="btn btn-primary" type="submit" value="Validar Perfil">
  </form>
</div>  
@endsection