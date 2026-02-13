<?php

namespace App\Http\Controllers\Admin\Classe;

use App\Models\Serie;
use App\Models\Classe;
use App\Models\Niveau;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Classe\ClasseRequest;

class ClasseController extends Controller
{
    public function index()
    {
        return view('admin.classe.classe', [
            'classes' => Classe::get(),
            'niveaux' => Niveau::get(),
            'series' => Serie::get(),
        ]);
    }

    public function store(ClasseRequest $request)
    {
        Classe::create($request->only('name', 'niveau_id', 'serie_id'));
        return redirect()->route('classe.index')->with('success', 'Classe créée avec succès.');
    }

    public function update(ClasseRequest $request, Classe $classe)
    {
        $classe->update($request->only('name', 'niveau_id', 'serie_id'));
        return redirect()->route('classe.index')->with('success', 'Classe mise à jour avec succès.');
    }

    public function destroy(Classe $classe)
    {
        $classe->delete();
        return redirect()->route('classe.index')->with('success', 'Classe supprimée avec succès.');
    }
}
