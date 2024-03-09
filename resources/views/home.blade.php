<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans">

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

<div class="hero bg-gray-200 p-10 text-center">
    <h2 class="text-4xl font-bold">Trouvez la maison de vos rêves</h2>
    <p class="text-xl mt-2">Découvrez des biens exceptionnels dans des lieux uniques</p>
    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Voir les annonces</button>
</div>

<div class="container mx-auto grid grid-cols-3 gap-4 p-4">
    <!-- Générer dynamiquement les cartes de biens ici -->
</div>

<footer class="bg-gray-800 text-white p-4 text-center">
    <p>&copy; 2024 - Fenril992</p>
</footer>

</body>
</html>
