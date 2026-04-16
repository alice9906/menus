<!DOCTYPE html>
<html>
<head>
    <title>Menus Project</title>

    <style>
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: black;
        }

        .active {
            font-weight: bold;
            color: red;
        }

        footer {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Menú -->
    <nav>
        <a href="{{ route('home') }}" 
           class="{{ request()->routeIs('home') ? 'active' : '' }}">
           Home
        </a>

        <a href="{{ route('photos') }}" 
           class="{{ request()->routeIs('photos') ? 'active' : '' }}">
           Photos
        </a>

        <a href="{{ route('contact') }}" 
           class="{{ request()->routeIs('contact') ? 'active' : '' }}">
           Contact
        </a>
    </nav>

    <hr>

    <!-- Contenido dinámico -->
    @yield('content')

    <hr>

    <!-- Footer -->
    <footer>
        <p>Created by: Karla Luna</p>
    </footer>

</body>
</html>