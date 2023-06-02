<?php


//TODO : Pour chaque contrôleur, vous aurez besoin de méthodes pour index, show, store, update, et destroy
class RoleController extends Controller {
    public function index()
    {
        return Role::all();
    }

    public function show(Role $role)
    {
        return $role;
    }
}
