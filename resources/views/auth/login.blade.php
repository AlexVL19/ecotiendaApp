@extends('layouts.app')

@section('title', 'Ingresar')

@section('contents')

<div class="container border rounded mt-5" style="width: 450px">
    <h3 class="text-center mt-2">Ingreso al sistema</h3>
    <br>
    <form method="POST" acti>
        <div class="form-group">
          <label for="exampleInputEmail1">Correo electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Escriba su correo...">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Contraseña</label>
          <input type="password" class="form-control" id="pass" name="pass" placeholder="Escriba su contraseña...">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Ingresar</button>
        <br>
        <br>
      </form>
</div>

@endsection
