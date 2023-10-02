@extends('templates.template')

@section('content')
<h1 class="text-center"> Cadastrar </h1><hr>
<div class="col-8 m-auto">
  @if(isset($blog))
  <form name="formEdit" id="formEdit" action="{{route('blog.update', ['id' => $blog->id_blog])}}"  method="post">
    @method('PUT')
  @else
  <form name="formCad" id="formCad" method="post" action="{{route('blog.store')}}"> 
  @endif  
    @csrf
    <input class="form-control" type="text" name="titulo" id="titulo" placeholder="Título" value="{{ isset($blog) ? $blog->titulo : '' }}">
    <input class="form-control" type="text" name="assunto" id="assunto" placeholder="Conteúdo aqui" value="{{ isset($blog) ? $blog->assunto : '' }}"> 
    <input class="btn btn-primary" type="submit" value="@if(isset($usuario)) Editar @else Cadastrar @endif">
  </form>
</div>  
@endsection