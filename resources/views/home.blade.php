@extends('layouts.app')

@section('content')

<div class="p-10 text-center bg-gray-200 hero">
    <h2 class="text-4xl font-bold">Trouvez la maison de vos rêves</h2>
    <p class="mt-2 text-xl">Découvrez des biens exceptionnels dans des lieux uniques</p>
    <a href="/annonces" class="inline-block px-4 py-2 mt-4 text-center text-white bg-blue-500 rounded hover:bg-blue-700">
        Voir les annonces
    </a>
</div>

<div class="container grid grid-cols-3 gap-4 p-4 mx-auto">
    @foreach ($biens as $bien)
        <div class="max-w-sm overflow-hidden rounded shadow-lg">
            <img class="w-full" src="{{ $bien->image_path }}" alt="Image de {{ $bien->titre }}">
            <div class="px-6 py-4">
                <div class="mb-2 text-xl font-bold">{{ $bien->titre }}</div>
                <p class="text-base text-gray-700">
                    {{ $bien->description }}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">{{ number_format($bien->prix, 2, ',', ' ') }} €</span>
                <span class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">{{ $bien->adresse }}</span>
            </div>
        </div>
    @endforeach
</div>
@endsection
