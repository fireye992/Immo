@extends('layouts.app')

@section('contact')
<div class="container p-6 mx-auto text-center">
    <h2 class="mb-4 text-2xl font-bold">Contactez-nous</h2>
    <p>123 Rue Exemple, 75001 Paris, France</p>
    <p>Email: contact@exemple.com</p>
    <p>Téléphone: 01 23 45 67 89</p>

    <!-- Icônes des médias sociaux -->
    <div class="flex justify-center mt-4 space-x-4">
        <a href="#" aria-label="Facebook">
            <!-- Insérez votre icône SVG pour Facebook ici -->
        </a>
        <a href="#" aria-label="Twitter">
            <!-- Insérez votre icône SVG pour Twitter ici -->
        </a>
        <a href="#" aria-label="Instagram">
            <!-- Insérez votre icône SVG pour Instagram ici -->
        </a>
    </div>
</div>

@endsection



@section('content')
<div class="container p-6 mx-auto">
    <div class="p-10 text-white rounded-lg shadow-xl bg-gradient-to-r from-blue-500 to-blue-300">
        {{-- <h1 class="mb-4 text-5xl font-bold text-center">Contactez-Nous</h1> --}}
        <p class="mb-6 text-xl text-center">Découvrez des biens exceptionnels dans des lieux uniques.</p>

        <div class="flex justify-center space-x-6">

            <a href="https://www.facebook.com" target="_blank" class="transform hover:scale-110">
                <svg class="w-10 h-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.988h-2.54v-2.89h2.54V9.527c0-2.513 1.492-3.89 3.776-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.558v1.887h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
            </a>

            <a href="https://www.twitter.com" target="_blank" class="transform hover:scale-110">
                <svg class="w-10 h-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M24 4.557a9.83 9.83 0 0 1-2.828.775 4.94 4.94 0 0 0 2.165-2.723 9.865 9.865 0 0 1-3.127 1.195 4.925 4.925 0 0 0-8.384 4.487A13.969 13.969 0 0 1 1.671 3.149 4.925 4.925 0 0 0 3.194 9.723a4.902 4.902 0 0 1-2.229-.616v.06a4.926 4.926 0 0 0 3.946 4.827 4.902 4.902 0 0 1-1.294.172 4.924 4.924 0 0 1-.922-.088 4.928 4.928 0 0 0 4.604 3.417 9.875 9.875 0 0 1-6.102 2.105c-.398 0-.79-.023-1.177-.069a13.945 13.945 0 0 0 7.557 2.213c9.054 0 14.01-7.496 14.01-13.986 0-.21 0-.42-.015-.63A9.935 9.935 0 0 0 24 4.557z"/></svg>
            </a>

            <a href="https://www.linkedin.com" target="_blank" class="transform hover:scale-110">
                <svg class="w-10 h-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764c.967 0 1.75.79 1.75 1.764s-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
        </div>
    </div>
</div>
@endsection
