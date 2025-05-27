<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Facture;

class FactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facture::create([
            'montant' => 150.00,
            'date_creation' => now(),
            'status' => 'payée',
            'reservation_id' => 1,
        ]);

        Facture::create([
            'montant' => 200.00,
            'date_creation' => now()->subDays(2),
            'status' => 'en attente',
            'reservation_id' => 2,
        ]);

        Facture::create([
            'montant' => 300.00,
            'date_creation' => now()->subDays(5),
            'status' => 'annulée',
            'reservation_id' => 3,
        ]);
    }
}
