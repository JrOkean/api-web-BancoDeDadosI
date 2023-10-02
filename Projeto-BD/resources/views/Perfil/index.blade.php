@extends('templates.template')

@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nickname</th>
      <th scope="col">Data de criação</th>
      <th scope="col">Seguidores</th>
    </tr>
  </thead>
  <tbody>
         @foreach($profiles as $profile)
            <td>{{ $profile->id_perfil }}</td>
            <td>{{ $profile->user_name }}</td>
            <td>{{ $profile->data_criacao }}</td>
        @endforeach()
    </tbody>
    </table>
@endsection