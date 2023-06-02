<?php

class JoueurController extends Controller {
    public function index()
    {
        return Joueur::all();
    }

    public function show(Joueur $player)
    {
        return $player;
    }
}
