<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiensTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('biens')->insert([
            [
                'titre' => 'Appartement lumineux en centre-ville',
                'description' => 'Charmant appartement de 70 m² situé au cœur de la ville, offrant une grande pièce à vivre, deux chambres spacieuses, une cuisine équipée et une salle de bain moderne. Proche de toutes commodités et des transports en commun.',
                'prix' => 250000,
                'adresse' => '15 rue des Exemples, 75001 Paris',
                'image_path' => 'images/DALL·E 2024-03-09 19.37.19 - A set of three images representing luxurious real estate properties_ 1) A modern apartment with large windows and a city view, 2) A cozy countryside h.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Maison de campagne avec grand jardin',
                'description' => 'Belle maison de 120 m² dans un cadre verdoyant, comprenant un salon accueillant, trois chambres, une cuisine aménagée, deux salles de bains, et un vaste jardin de 800 m². Idéal pour une famille recherchant la tranquillité.',
                'prix' => 320000,
                'adresse' => '42 chemin des Exemples, 33000 Bordeaux',
                'image_path' => 'images/DALL·E 2024-03-09 19.37.19 - A set of three images representing luxurious real estate properties_ 1) A modern apartment with large windows and a city view, 2) A cozy countryside h.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Studio moderne près de la plage',
                'description' => 'Studio de 30 m² entièrement rénové, situé à seulement 5 minutes à pied de la plage. Pièce de vie optimisée avec cuisine ouverte, salle d\'eau fonctionnelle, et balcon avec vue. Parfait pour un investissement ou une résidence secondaire.',
                'prix' => 180000,
                'adresse' => '88 avenue des Exemples, 06000 Nice',
                'image_path' => 'images/DALL·E 2024-03-09 19.37.19 - A set of three images representing luxurious real estate properties_ 1) A modern apartment with large windows and a city view, 2) A cozy countryside h.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
