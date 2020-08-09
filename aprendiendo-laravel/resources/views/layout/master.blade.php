<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Titulo - @yield('titulo')</title>
    </head>
    <body>
        @section('header')
            <h1>CABECERA DE LA WEB (master)</h1>
        @show
        <div class="container">
            @yield('content')
        </div>
        <hr/>
        @section('footer')
            PIE DE PAGINA DE LA WEB (master)
        @show
    </body>
</html>
