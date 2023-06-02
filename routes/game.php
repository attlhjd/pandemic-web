<?php


use App\Http\Controllers\GameController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/game', [GameController::class, 'index'])->name('game.new');

Route::middleware('auth')->group(function () {
    Route::post('/game/join', [GameController::class, 'join'])->name('game.join');
    Route::get('/join', [JoinGameController::class, 'index'])->name('game.join');
});


