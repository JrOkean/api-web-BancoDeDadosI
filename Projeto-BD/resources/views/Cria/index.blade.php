@extends('templates.template')

@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID Autor</th>
      <th scope="col">Nick</th>
      <th scope="col">ID Blog</th>
      <th scope="col">Título</th>
    </tr>
  </thead>
  <tbody>
         @foreach($criacoes as $criacao)
            <td>{{ $criacao->perfilCria->id_usuario }}</td>
            <td>{{ $criacao->perfilCria->user_name }}</td>
            <td>{{ $criacao->blogCriado->id_blog }}</td>
            <td>{{ $criacao->blogCriado->titulo }}</td>
        @endforeach
    </tbody>
    </table>
@endsection