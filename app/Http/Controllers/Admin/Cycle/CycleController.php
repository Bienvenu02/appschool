<?php

namespace App\Http\Controllers\Admin\Cycle;

use App\Models\Cycle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cycle\CycleRequest;

class CycleController extends Controller
{
    public function index()
    {
        return view('admin.cycle.cycle', [
            'cycles' => Cycle::get(),
        ]);
    }

    public function store(CycleRequest $request)
    {
        $validated = $request->validated();
        Cycle::create($validated);

        return redirect()->route('cycle.index')->with('success', 'Cycle créé avec succès.');
    }

    public function update(CycleRequest $request, Cycle $cycle)
    {
        $validated = $request->validated();
        $cycle->update($validated);

        return redirect()->route('cycle.index')->with('success', 'Cycle mis à jour avec succès.');
    }

    public function destroy(Cycle $cycle)
    {
        $cycle->delete();
        return redirect()->route('cycle.index')->with('success', 'Cycle supprimé avec succès.');
    }
}
