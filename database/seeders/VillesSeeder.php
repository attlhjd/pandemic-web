<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Ville;

class VillesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Exemple de génération de quelques villes

        Ville::create([
            'nom' => 'Paris',
            'maladie_cubes' => 0,
            'couleur_maladie' => 'blue',
            'centre_recherche' => false,
            'connexions' => json_encode(['Marseille', 'Lyon']),
        ]);

        Ville::create([
            'nom' => 'Marseille',
            'maladie_cubes' => 0,
            'couleur_maladie' => 'yellow',
            'centre_recherche' => false,
            'connexions' => json_encode(['Paris', 'Lyon', 'Nice']),
        ]);
    }
}

