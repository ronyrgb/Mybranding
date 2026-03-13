<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@section('titulo')</title>
        <meta charset="utf-8">

    @vite('resources/css/app.css')
    </head>
       <body>
        @include('site.layouts._partials.topo')
         @yield('conteudo')

     </body>

</html>