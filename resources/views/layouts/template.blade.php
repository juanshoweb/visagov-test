<!DOCTYPE HTML>
<html LANG="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>


    @yield('contenido')

    <footer>

    </footer>
</body>
</html>
