<!doctype html>
<html lang="es">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/navbarStyles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title') - Ecotienda</title>
  </head>
  <body>

      <!-- Barra de navegación -->
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="/">Ecotienda</a>
            </i><a class="nav-item nav-link hover" href="{{ route('register.index')}}"><i class="fa fa-address-card" aria-hidden="true"></i> Registrarse</a>
            <a class="nav-item nav-link" href="{{ route('login.index')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Ingresar</a>
        </div>
    </nav>

    <!-- Contenido -->
    <div class="container">
    @yield('contents')
    </div>

  </body>
</html>
