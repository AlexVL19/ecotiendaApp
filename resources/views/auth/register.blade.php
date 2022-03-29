@extends('layouts.app')

@section('title', 'Registrarse')

@section('contents')

<div class="container border rounded mt-5" style="width: 600px">
    <h3 class="text-center mt-4">Registro de usuarios</h3>
    <br>
    <form method="POST" action="">
        @csrf

        <div class="form-group">
          <label for="name">Nombre del usuario</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Escriba su nombre...">
        </div>
        <br>

        <div class="form-group">
            <label for="name">Apellidos del usuario</label>
            <input type="text" class="form-control" id="sndname" name="sndname" placeholder="Escriba sus apellidos...">
          </div>
          <br>

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su correo...">
          </div>
        <br>

          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Escriba su contraseña...">
        </div>
        <br>

        @error('message')
        <div class="alert alert-danger" role="alert">
            * Hubo un error durante el proceso de registro. Por favor, intente de nuevo.
          </div>
        <br>
        @enderror

        <center>
        <button type="submit" class="btn btn-success">Registrarse</button>
        <br>
        <br>
      </form>
</div>

@endsection
