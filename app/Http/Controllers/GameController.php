<?php


namespace App\Http\Controllers;


use App\Models\Carte;
use App\Models\Joueur;
use App\Models\Role;
use App\Models\Ville;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Game/Game', [
            'roles' => Role::all(),
            'joueurs' => Joueur::with('role', 'cards')->get(),
            'villes' => Ville::all(),
            'cartes' => Carte::all(),
        ]);
    }

    public function join(Request $request)
    {
        $request->validate([
            'player_name' => 'required|max:255',
            'role_id' => 'required|exists:roles,id',
        ]);

        $player = Player::create([
            'name' => $request->player_name,
            'role_id' => $request->role_id,
            'user_id' => auth()->id(),
            'position_id' => City::first()->id,  // let's assume the player starts at the first city
        ]);

        // you could broadcast an event here to inform the other players that a new player has joined the game

        return response()->json($player, 201);
    }
}
