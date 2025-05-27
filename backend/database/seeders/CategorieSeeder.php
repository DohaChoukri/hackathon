<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create([
            'name' => 'Salle de réunion',
            'description' => 'Salle équipée pour les réunions d\'affaires.',
        ]);

        Categorie::create([
            'name' => 'Salle de conférence',
            'description' => 'Grande salle pour conférences et séminaires.',
        ]);

        Categorie::create([
            'name' => 'Bureau partagé',
            'description' => 'Espace de travail partagé pour les freelances et les startups.',
        ]);

        Categorie::create([
            'name' => 'Espace événementiel',
            'description' => 'Espace polyvalent pour événements divers.',
        ]);
        Categorie::create([
            'name' => 'Salle de formation',
            'description' => 'Salle équipée pour les sessions de formation et d\'enseignement.',
        ]);
    }
}
