<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{


    public function run()
    {
        Role::create([
            'nom' => 'Planificateur d\'urgence',
            'couleur' => 'skyblue',
            'description' => 'Peut récupérer les cartes Évènements déjà utilisées.',
        ]);

        Role::create([
            'nom' => 'Répartiteur',
            'couleur' => 'blue',
            'description' => 'Peut déplacer les autres joueurs pendant son tour comme son propre pion, en utilisant les actions de base. Il peut aussi, pour une action, déplacer un pion dans une autre ville contenant un autre pion.',
        ]);

        Role::create([
            'nom' => 'Médecin',
            'couleur' => 'orange',
            'description' => 'Retire tous les cubes de maladie pour une action. Si le remède est découvert, les cubes disparaissent sur son passage.',
        ]);

        Role::create([
            'nom' => 'Expert aux opérations',
            'couleur' => 'green',
            'description' => 'Peut créer un centre où qu\'il se trouve sans utiliser de carte. À partir d\'un centre, il peut utiliser n\'importe quelle carte ville de sa main pour aller où il veut sur le plateau.',
        ]);

        Role::create([
            'nom' => 'Spécialiste en mise en quarantaine',
            'couleur' => 'darkgreen',
            'description' => 'Empêche les éclosions et le placement de cubes Maladie dans la ville qu\'elle occupe ainsi que dans toutes les villes qui y sont reliées.',
        ]);

        Role::create([
            'nom' => 'Chercheur',
            'couleur' => 'brown',
            'description' => 'Peut donner n\'importe quelle carte à un joueur situé sur la même case que lui.',
        ]);

        Role::create([
            'nom' => 'Scientifique',
            'couleur' => 'white',
            'description' => 'Peut créer un vaccin contre seulement 4 cartes (au lieu de 5).',
        ]);
    }
}
