<?php

namespace App\Http\Controllers\Admin\Niveau;

use App\Models\Niveau;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Niveau\NiveauRequest;
use App\Models\Cycle;

class NiveauController extends Controller
{
    public function index()
    {
        return view('admin.niveau.niveau', [
            'niveaux' => Niveau::get()->values(),
            'cycles' => Cycle::get(),
        ]);
    }

    public function store(NiveauRequest $request)
    {
        Niveau::create($request->validated());
        return redirect()->route('niveau.index')->with('success', 'Niveau créé avec succès.');
    }

    public function update(NiveauRequest $request, Niveau $niveau)
    {
        $niveau->update($request->validated());
        return redirect()->route('niveau.index')->with('success', 'Niveau mis à jour avec succès.');
    }

    public function destroy(Niveau $niveau)
    {
        $niveau->delete();
        return redirect()->route('niveau.index')->with('success', 'Niveau supprimé avec succès.');
    }
}
