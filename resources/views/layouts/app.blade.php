<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
     <div class="container-fluid menu">
        <div class="row">
        <div class="col-lg-2 text-start">
                <a href="{{ route('Login') }}" class="btn btn-secondary btnTrello">
                <i class="bi bi-kanban icono-trello"></i>
                <span class="titulo-boton">Trello.2</span>
                </a>
        </div>
        <div class="col-lg-8 text-end">
            <nav class="navbar-fluid">
           
                <form class="d-flex" role="search">
                <input class="form-control me-2 busqueda" type="search" placeholder="Buscar" aria-label="Buscar"/>
                <button class="btn btn-secondary btn-busqueda" type="submit"> <i class="bi bi-search textoBoton"></i></button>
                </form>
            
            </nav>
        </div>
        <div class="col-lg-2 text-end">
            <a href="{{ route('perfil') }}" class="btn btn-secondary boton-menu"><i class="bi bi-person-lines-fill textoBoton"></i></a>
            <a href="{{ route('config') }}" class="btn btn-secondary boton-menu"><i class="bi bi-gear-wide-connected"></i></i></a>
        </div>
    </div>
    </div>

    <main>
        @yield('contenido')
    </main>

    <footer>

    </footer>

    @stack('scripts')
</body>
</html>