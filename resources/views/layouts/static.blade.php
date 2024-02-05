<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('../resources/media/favicon.png') }}">
    <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('../resources/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../resources/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ asset('../resources/css/custom.css') }}" rel="stylesheet">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">
            @yield('logo')
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="desplegable" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dades mestres
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/laravelVistas/public/cicles">Cicles</a></li>
                  <li><a class="dropdown-item" href="/laravelVistas/public/cursos">Cursos</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        @yield('contenido')
    </div>
</body>
</html>