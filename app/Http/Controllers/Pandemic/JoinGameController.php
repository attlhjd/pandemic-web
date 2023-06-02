<?php
use App\Models\Role;
use Inertia\Inertia;

class JoinGameController extends Controller
{
    public function index()
    {
        return Inertia::render('JoinGame', [
            'roles' => Role::all(),
        ]);
    }
}
