@extends('templates.template')

@section('content')
<h1 class="text-center"> Visualizar </h1></hr>
<div class="col-8 m-auto">
    ID: {{$blog->id_blog}} <hr>
    Data de Criação: {{$blog->data_criacao}} <hr>
    Título: {{$blog->titulo}} <hr>
    Assunto: {{$blog->assunto}} <hr>
    <!--Autor: {{$blog->senha}} <hr>-->

    <form action="{{route('blog.destroy', $blog->id_blog)}}" method="post">
        @csrf
        <input type="submit" class="btn btn-danger" value="Deletar">
    </form>

</div>
@endsection