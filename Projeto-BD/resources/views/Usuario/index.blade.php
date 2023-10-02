@extends('templates.template')

@section('content')
<h1 class="text-center"> Usuários </h1></hr>
  <a href="{{url('/usuarios/create')}}">

<div class="col-8 m-auto">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nickname</th>
      <th scope="col">Primeiro Nome</th>
      <th scope="col">Último Nome</th>
    </tr>
  </thead>
  <tbody>
         @foreach($users as $user)
            <td>{{ $user->id_usuario }}</td>
            <td>{{ $user->user_name }}</td>
            <td>{{ $user->primeiro_nome }}</td>
            <td>{{ $user->sobrenome }}</td>
        @endforeach()
  </tbody>
</table>
</div>
@endsection