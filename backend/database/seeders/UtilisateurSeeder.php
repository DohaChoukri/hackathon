<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;
class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Utilisateur::create([
            'nom' => 'doha',
            'email' => 'doha@gamil.com', 
            'mot_de_passe' => bcrypt('doha123'), 
            'qr_code' => 'https://example.com/qr-code/alice', 
            'role' => 'admin',
        ]);
        Utilisateur::create([
            'nom' => 'nouhaila',
            'email' => 'nouhaila@example.com',  
            'mot_de_passe' => bcrypt('nouhaila123'), 
            'qr_code' => 'https://example.com/qr-code/bob',
            'role' => 'client', 
        ]);
        Utilisateur::create([
            'nom' => 'Aymane',
            'email' => 'Aymane@gamil.com',  
            'mot_de_passe' => bcrypt('Aymane123'), 
            'qr_code' => 'https://example.com/qr-code/bob',
            'role' => 'client', 
        ]);
    }
}
