<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>@yield('title') - Ecotienda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="/curso">Ecotienda</a>
            <a class="nav-item nav-link" href="/curso">Registrarse</a>
            <a class="nav-item nav-link" href="/curso">Ingresar</a>
        </div>
    </nav>

    <div class="container">
    @yield('contents')
    </div>

  </body>
</html>
