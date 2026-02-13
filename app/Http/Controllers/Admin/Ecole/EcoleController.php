<?php

namespace App\Http\Controllers\Admin\Ecole;

use App\Models\Ecole;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Ecole\EcoleUpdateRequest;

class EcoleController extends Controller
{
    public function index()
    {
        $ecole = Ecole::first();
        return view('admin.ecole.ecole', ['ecole' => $ecole]);
    }

    public function store(EcoleUpdateRequest $request)
    {
        $data = $request->validated();

        // Stocker le logo s'il est fourni
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('ecoles/logos', 'public');
        }

        // Créer l'école
        Ecole::create($data);

        return to_route('ecole.index')
            ->with('success', "L'école a été créée avec succès.");

    }


    public function update(EcoleUpdateRequest $request, Ecole $ecole)
    {
        $data = $request->validated();

        if ($request->hasFile('logo')) {

            // Supprimer l'ancien logo s'il existe
            if ($ecole->logo && Storage::disk('public')->exists($ecole->logo)) {
                Storage::disk('public')->delete($ecole->logo);
            }

            // Stocker le nouveau logo
            $data['logo'] = $request->file('logo')->store('ecoles/logos', 'public');
        }

        // Mise à jour de l'école
        $ecole->update($data);

        return to_route('ecole.index')
            ->with('success', "Les informations de l'école ont été mises à jour avec succès.");
    }
}
