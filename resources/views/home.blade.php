@extends('layouts.app')

@section('content')

<div class="hero bg-gray-200 p-10 text-center">
    <h2 class="text-4xl font-bold">Trouvez la maison de vos rêves</h2>
    <p class="text-xl mt-2">Découvrez des biens exceptionnels dans des lieux uniques</p>
    <a href="/annonces" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700 inline-block text-center">
        Voir les annonces
    </a>
</div>

<div class="container mx-auto grid grid-cols-3 gap-4 p-4">
    @foreach ($biens as $bien)
        <div class="max-w-sm rounded overflow-hidden shadow-lg">
            <img class="w-full" src="{{ $bien->image_path }}" alt="Image de {{ $bien->titre }}">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $bien->titre }}</div>
                <p class="text-gray-700 text-base">
                    {{ $bien->description }}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ number_format($bien->prix, 2, ',', ' ') }} €</span>
                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $bien->adresse }}</span>
            </div>
        </div>
    @endforeach
</div>
@endsection
