@extends('templates.template')

@section('content')
<h1 class="text-center"> Cadastrar </h1></hr>
<div class="col-8 m-auto">
  <form name="formCad" id="formCad" method="post" action="{{url('/usuarios')}}"> 
    @csrf
    <input class="form-control" type="text" name="nickname" id="nickname" placeholder="Nome de usuário"> 
    <input class="form-control" type="text" name="senha" id="senha" placeholder="Senha">
    <input class="form-control" type="text" name="nome" id="nome" placeholder="Primeiro Nome">
    <input class="form-control" type="text" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
    <input class="btn btn-primary" type="submit" value="Cadastra">
  </form>
</div>  
@endsection