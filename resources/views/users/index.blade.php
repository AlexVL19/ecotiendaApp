@extends('layouts.app')

@section('title', 'Usuarios')

@section('contents')

    <div class="container mt-3 mb-5">
        <h3 class="text-center">Lista de usuarios</h3>
        <br>
        <center>
            <a href="{{ route('userList.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Añadir...</a>
            <br>
            <hr class="text-center" style="line-height: 200px">
        </center>
    </div>

    <center>
    <div class="row">
        @foreach ($userobj as $user)
        <div class="col ml-2 mr-2 mb-2">

            <div class="alert alert-success" role="alert" style="width: 450px">
                <b>Nombres y apellidos:</b> {{$user->name}} {{$user->sndname}}
                <hr>
                <b>Correo:</b> {{$user->email}}
                <hr>
                <b>Rol:</b> {{$user->role}}
                <hr>
                <b>Usuario creado en:</b> {{$user->created_at}}
                <hr>
                <a href="/userList/{{$user->id}}/edit" class="btn btn-dark"><i class="fa fa-pencil"></i> Editar</a>
                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</a>
              </div>

        </div>
        @endforeach
    </div>

@endsection
