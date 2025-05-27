<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Local;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Local::create([
            'name' => 'Salle de réunion A',
            'description' => 'Salle équipée pour les réunions d\'affaires.',
            'capacite' => 10,
            'categorie_id' => 1,
            'prix' => 50.00,
            'disponibilite' => true,
        ]);

        Local::create([
            'name' => 'Salle de conférence B',
            'description' => 'Grande salle pour conférences et séminaires.',
            'capacite' => 50,
            'categorie_id' => 2,
            'prix' => 200.00,
            'disponibilite' => true,
        ]);

        Local::create([
            'name' => 'Bureau partagé C',
            'description' => 'Espace de travail partagé pour les freelances et les startups.',
            'capacite' => 5,
            'categorie_id' => 3,
            'prix' => 30.00,
            'disponibilite' => true,
        ]);

        Local::create([
            'name' => 'Espace événementiel D',
            'description' => 'Espace polyvalent pour événements divers.',
            'capacite' => 100,
            'categorie_id' => 4,
            'prix' => 500.00,
            'disponibilite' => true,
        ]);
        
        Local::create([
            'name' => 'Salle de formation E',
            'description' => 'Salle équipée pour les sessions de formation et d\'enseignement.',
            'capacite' => 20,
            'categorie_id' => 5,
            'prix' => 80.00,
            'disponibilite' => true,
        ]);
    }
}
