<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Agence Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl">Agence Immobilière</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ url('/') }}" class="hover:text-gray-300">Accueil</a></li>
                    <li><a href="{{ url('/annonces') }}" class="hover:text-gray-300">Annonces</a></li>
                    <li><a href="#" class="hover:text-gray-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 - Fenril992</p>
    </footer>
</body>
</html>
