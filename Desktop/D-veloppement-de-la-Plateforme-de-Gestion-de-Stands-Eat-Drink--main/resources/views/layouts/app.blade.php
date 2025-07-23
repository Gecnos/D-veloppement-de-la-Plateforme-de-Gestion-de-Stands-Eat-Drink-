<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Eat&Drink - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Eat&Drink</h1>
        <nav>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('inscription') }}">Inscription exposant</a>
            <a href="{{ route('catalogue') }}">Catalogue</a>
            <a href="{{ route('dashboard') }}">Mon espace</a>
            <a href="{{ route('admin') }}">Admin</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Eat&Drink. Tous droits réservés.</p>
    </footer>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')

</body>
</html>