<?php

namespace App\Http\Controllers\Admin\Groupe;

use App\Models\Groupe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Groupe\GroupeRequest;

class GroupeController extends Controller
{
    public function index()
    {
        return view('admin.groupe.groupe', [
            'groupes' => Groupe::get()
        ]);
    }

    public function store(GroupeRequest $request)
    {
        $validated = $request->validated();
        Groupe::create($validated);

        return redirect()->route('groupe.index')->with('success', 'Groupe créé avec succès.');
    }

    public function update(GroupeRequest $request, Groupe $groupe)
    {
        $validated = $request->validated();
        $groupe->update($validated);

        return redirect()->route('groupe.index')->with('success', 'Groupe mis à jour avec succès.');
    }

    public function destroy(Groupe $groupe)
    {
        $groupe->delete();

        return to_route('groupe.index')
            ->with('success', "Le groupe a été supprimé avec succès.");
    }
}
