@extends('templates.template')

@section('content')
<h1 class="text-center">Usuários</h1><hr>
    <div class="col-8 m-auto">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome de Usuário</th>
            <th scope="col">Primeiro nome</th>
            <th scope="col">Segundo nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Users as $User)
                {{$User->user_name}}
            @endforeach()
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mto</td>
        </tr>
        </tbody>
        </table>
    </div>
@endsection