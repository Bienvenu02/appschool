<?php

namespace App\Http\Controllers\Admin\Serie;

use App\Models\Serie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Serie\SerieRequest;

class SerieController extends Controller
{
    public function index()
    {
        return view('admin.serie.serie', [
            'series' => Serie::get()
        ]);
    }

    public function store(SerieRequest $request)
    {
        Serie::create($request->validated());
        return redirect()->route('serie.index')->with('success', 'Série créée avec succès.');
    }

    public function update(SerieRequest $request, Serie $serie)
    {
        $serie->update($request->validated());
        return redirect()->route('serie.index')->with('success', 'Série mise à jour avec succès.');
    }

    public function destroy(Serie $serie)
    {
        $serie->delete();
        return redirect()->route('serie.index')->with('success', 'Série supprimée avec succès.');
    }
}
