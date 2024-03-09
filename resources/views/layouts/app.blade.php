<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Agence Immobilière</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Votre barre de navigation ici -->
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <!-- Votre pied de page ici -->
    </footer>
</body>
</html>
