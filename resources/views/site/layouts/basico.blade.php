<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>

</body>
    @include('site/layouts/partial_views/menu')
    @yield('conteudo')
</html>
