@extends('layouts.app')

@section('content')
<div class="container p-6 mx-auto">
    <h2 class="mb-6 text-2xl font-bold">Nos Annonces</h2>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($biens as $bien)
            <div class="max-w-sm overflow-hidden bg-white rounded shadow-lg">
                <img class="w-full" src="{{ asset($bien->image_path) }}" alt="Image du bien">
                <div class="px-6 py-4">
                    <div class="mb-2 text-xl font-bold">{{ $bien->titre }}</div>
                    <p class="text-base text-gray-700">
                        {{ $bien->description }}
                    </p>
                </div>
                <div class="px-6 py-4">
                    {{ number_format($bien->prix, 0, ',', ' ') }} €
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
