<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>
        {{-- Permite que en otros archivos puedan modificar esta porcion --}}
        @yield('title')
    </title>
</head>
<body>
    {{-- Contiene el archivo del menu --}}
    @include('layouts._partials.menu')
    {{-- Permite que otros archivos ingresen informacion al body --}}
    @yield('content')
</body>
</html>