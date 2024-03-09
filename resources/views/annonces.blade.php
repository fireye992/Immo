@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold my-4">Nos Annonces</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($biens as $bien)
        <div class="border rounded shadow p-4">
            <h2 class="text-xl font-bold">{{ $bien->titre }}</h2>
            <img src="{{ $bien->image_path }}" alt="Photo du bien" class="w-full h-48 object-cover my-2">
            <p>{{ Str::limit($bien->description, 150) }}</p>
            <p class="text-lg font-semibold my-2">{{ number_format($bien->prix, 2, ',', ' ') }} €</p>
            <a href="#" class="text-blue-600 hover:text-blue-800">Voir plus</a>
        </div>
        @endforeach
    </div>
</div>
@endsection
