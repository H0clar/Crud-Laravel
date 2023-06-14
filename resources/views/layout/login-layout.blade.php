<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My CRUD App - Login</title>
    
    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    
    <!-- Iconos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><b>My CRUD App</b> - Login</a>
        </div>
        
        <!-- Contenido de página -->
        <div class="card">
            <div class="card-body login-card-body">
                @yield('content')
            </div>
        </div>
        
        <!-- Pie de página -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Version 1.0
            </div>
            <strong>My CRUD App &copy; 2023</strong>
        </footer>
    </div>
    
    <!-- Scripts de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
