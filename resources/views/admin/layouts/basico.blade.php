<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        @vite('resources/css/app.css')
    </head>

    <body>
        @include('admin.layouts._partials.topo')
        @yield('conteudo')
    </body>
</html>
