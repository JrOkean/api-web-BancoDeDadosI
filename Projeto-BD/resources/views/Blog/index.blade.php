@extends('templates.template')

@section('content')
<h1 class="text-center"> Todos os blogs </h1></hr>
<div class="col-8 m-auto">
@csrf
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Assunto</th>
    </tr>
  </thead>
  <tbody>
         @foreach($blogs as $blog)
            <td>{{ $blog->id_blog }}</td>
            <td>{{ $blog->titulo }}</td>
            <td>{{ $blog->assunto }}</td>
        @endforeach
  </tbody>
</table>
</div>
@endsection