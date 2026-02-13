<?php

namespace App\Http\Controllers\Admin\Utilisateur;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;

class UtilisateurController extends Controller
{
    public function index()
    {
        abort('403');
        // dd(array_values(rolesUtilisateursPersonnels()));
        return view('admin.utilisateur.utilisateur', [
            'roles' => rolesUtilisateursPersonnels(),
            'users' => User::get()
        ]);
    }

    public function store(UserRequest $request)
    {
        
    }
}
