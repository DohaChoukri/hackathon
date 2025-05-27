<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'date_debut' => now()->addDays(1),
            'date_fin' => now()->addDays(2),
            'status' => 'confirmée',
            'local_id' => 1,
            'user_id' => 1,
        ]);
        Reservation::create([
            'date_debut' => now()->addDays(3),
            'date_fin' => now()->addDays(4),
            'status' => 'en attente',
            'local_id' => 2,
            'user_id' => 2,
        ]);
        Reservation::create([
            'date_debut' => now()->addDays(5),
            'date_fin' => now()->addDays(6),
            'status' => 'annulée',
            'local_id' => 3,
            'user_id' => 3,
        ]);
    }
}
