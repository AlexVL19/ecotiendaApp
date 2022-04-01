@extends('layouts.app')

@section('title', 'Detalles del usuario')

@section('contents')
    <div class="container mt-3 mb-5">
        <h3 class="text-center">{{ auth()->user()->name }} {{ auth()->user()->sndname }}</h3>
    </div>

    <div class="container mt-2 mb-3 text-center">
        <p class="text-center">{{ auth()->user()->email }}</p>
        <p class="text-center">Usuario creado en {{ auth()->user()->created_at }}</p>
        <a href="#" class="btn btn-dark">Editar usuario</a>
    </div>
@endsection
