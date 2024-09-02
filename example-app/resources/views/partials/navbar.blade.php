<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<div class="dashboard">
    <div class="dashboard-nav">
        <header>
            <!-- Toggle Button for Mobile -->
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>

            <!-- Brand Logo -->
            <a href="#" class="brand-logo">
                <i class="fas fa-anchor"></i> <span>Giovanni</span>
            </a>
        </header>

        <!-- Navigation Links -->
        <nav class="dashboard-nav-list">
            <!-- Main Links -->
            <div class="dashboard-main-links">
                <a class="dashboard-nav-item" href="#"><i class="fas fa-user"></i>Usuarios</a>
                <a class="dashboard-nav-item" href="{{ route('productos.index') }}"><i class="fas fa-home"></i>Productosss</a>
                <a class="dashboard-nav-item" href="{{ route('categoria.index') }}"><i class="fas fa-home"></i>Categorias</a>
                <a class="dashboard-nav-item" href="{{ route('proveedores.index') }}"><i class="fas fa-home"></i>Proveedores</a>
                <a class="dashboard-nav-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Salir</a>
            </div>

            <!-- User Dropdown at the Bottom -->
            <div class="dashboard-user-dropdown mt-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://via.placeholder.com/30" alt="User" class="rounded-circle me-1">
                    @if (Auth::check())
                        <span>Bienvenido, {{ Auth::user()->name }}</span>
                    @else
                        <span>No has iniciado sesión.</span>
                    @endif
                </a>
               
            </div>
        </nav>
    </div>
</div>
