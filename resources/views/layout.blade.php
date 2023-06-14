<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Aplicación</title>
    <!-- Agrega los estilos CSS de AdminLTE -->
    <link rel="stylesheet" href="{{ asset('assets-adminlte/dist/css/adminlte.min.css') }}">
    <!-- Agrega tus propios estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <!-- Contenido del body -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar content -->
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar content -->
        </aside>

        <!-- Contenido principal -->
        <div class="content-wrapper">
            <!-- Contenido de la página -->
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <!-- Footer content -->
        </footer>
    </div>

    <!-- Scripts JS -->
    <!-- Agrega los scripts JS de AdminLTE -->
    <script src="{{ asset(assets-adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- Agrega tus propios scripts JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
