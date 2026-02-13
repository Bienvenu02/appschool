<?php

namespace App\Http\Controllers\Admin\Classe;

use App\Models\Site;
use App\Models\Classe;
use App\Models\Groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\AnneeScolaireSiteClasse;

class AnneeSiteClasseController extends Controller
{
    public function index()
    {
        $anneeScolaireSiteId = anneeScolaireSiteId();

        // Récupérer les affectations avec toutes les relations
        $anneeSiteClasses = AnneeScolaireSiteClasse::with([
            'anneeScolaireSite.anneeScolaire',
            'anneeScolaireSite.site',
            'classe.niveau',
            'classe.serie',
            'groupe',
            'userCreated',
            'userUpdated'
        ])
            ->where('annee_scolaire_site_id', $anneeScolaireSiteId)
            ->orderBy('groupe_id')
            ->orderBy('created_at', 'desc')
            ->get();

        // Récupérer les classes NON encore affectées pour cette année/site
        $classesAffectees = $anneeSiteClasses->pluck('classe_id')->toArray();
        $classesDisponibles = Classe::with('niveau', 'serie')
            ->whereNotIn('id', $classesAffectees)
            ->orderBy('name')
            ->get();

        return view('admin.classe.annee_site_classe', [
            'affectations' => $anneeSiteClasses,
            'sites' => Site::get(),
            'classesDisponibles' => $classesDisponibles,
            'groupes' => Groupe::orderBy('name')->get(),
            
        ]);
    }

    public function store(Request $request)
    {
        // 1. VALIDATION
        $request->validate([
            'groupe_id' => 'required|exists:groupes,id',
            'classe_ids' => 'required|array|min:1',
            'classe_ids.*' => 'required|exists:classes,id',
        ], [
            'groupe_id.required' => 'Veuillez sélectionner un groupe',
            'groupe_id.exists' => 'Le groupe sélectionné n\'existe pas',
            'classe_ids.required' => 'Veuillez sélectionner au moins une classe',
            'classe_ids.min' => 'Veuillez sélectionner au moins une classe',
            'classe_ids.*.exists' => 'Une ou plusieurs classes sélectionnées n\'existent pas',
        ]);

        // 2. RÉCUPÉRATION DES DONNÉES
        $anneeScolaireSiteId = anneeScolaireSiteId(); // Fonction helper qui retourne l'ID
        $userId = Auth::id();
        $groupeId = $request->groupe_id;
        $classeIds = $request->classe_ids;

        // 3. TRANSACTION POUR GARANTIR L'INTÉGRITÉ
        DB::beginTransaction();

        try {
            $affectationsCreated = 0;
            $affectationsIgnored = 0;

            foreach ($classeIds as $classeId) {
                // Vérifier si l'affectation existe déjà pour cette classe et cette année/site
                $existingAffectation = AnneeScolaireSiteClasse::where([
                    'annee_scolaire_site_id' => $anneeScolaireSiteId,
                    'classe_id' => $classeId,
                ])->first();

                if ($existingAffectation) {
                    // Cette classe est déjà affectée, on l'ignore
                    $affectationsIgnored++;
                    continue;
                }

                // Créer nouvelle affectation
                AnneeScolaireSiteClasse::create([
                    'annee_scolaire_site_id' => $anneeScolaireSiteId,
                    'groupe_id' => $groupeId,
                    'classe_id' => $classeId,
                    'userCreated_id' => $userId,
                    'userUpdated_id' => $userId,
                ]);

                $affectationsCreated++;
            }

            DB::commit();

            // 4. MESSAGE DE SUCCÈS
            $message = '';
            if ($affectationsCreated > 0) {
                $message .= "$affectationsCreated classe(s) affectée(s) avec succès.";
            }
            if ($affectationsIgnored > 0) {
                $message .= " $affectationsIgnored classe(s) déjà affectée(s) (ignorée(s)).";
            }

            return redirect()->route('affectation-site-classe.index')
                ->with('success', $message);
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de l\'affectation : ' . $e->getMessage())
                ->withInput();
        }
    }

    public function update(Request $request, string $id)
    {
        // 1. VALIDATION
        $request->validate([
            'groupe_id' => 'required|exists:groupes,id',
            'classe_id' => 'required|exists:classes,id',
        ], [
            'groupe_id.required' => 'Veuillez sélectionner un groupe',
            'groupe_id.exists' => 'Le groupe sélectionné n\'existe pas',
            'classe_id.required' => 'Veuillez sélectionner une classe',
            'classe_id.exists' => 'La classe sélectionnée n\'existe pas',
        ]);

        // 2. RÉCUPÉRATION DE L'AFFECTATION
        $affectation = AnneeScolaireSiteClasse::findOrFail($id);
        $anneeScolaireSiteId = anneeScolaireSiteId();
        $userId = Auth::id();

        // 3. VÉRIFICATION DE SÉCURITÉ
        if ($affectation->annee_scolaire_site_id != $anneeScolaireSiteId) {
            return redirect()->back()
                ->with('error', 'Cette affectation n\'appartient pas à l\'année scolaire et au site actifs.');
        }

        DB::beginTransaction();

        try {
            // 4. VÉRIFIER QU'IL N'EXISTE PAS DÉJÀ UNE AUTRE AFFECTATION POUR CETTE CLASSE
            $existingAffectation = AnneeScolaireSiteClasse::where([
                'annee_scolaire_site_id' => $anneeScolaireSiteId,
                'classe_id' => $request->classe_id,
            ])
                ->where('id', '!=', $id) // Exclure l'affectation actuelle
                ->first();

            if ($existingAffectation) {
                return redirect()->back()
                    ->with('error', 'Cette classe est déjà affectée à un autre groupe.')
                    ->withInput();
            }

            // 5. MISE À JOUR
            $affectation->update([
                'groupe_id' => $request->groupe_id,
                'classe_id' => $request->classe_id,
                'userUpdated_id' => $userId,
            ]);

            DB::commit();

            return redirect()->route('affectation-site-classe.index')
                ->with('success', 'Affectation modifiée avec succès.');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de la modification : ' . $e->getMessage())
                ->withInput();
        }
    }

    public function destroy(string $id)
    {
        $affectation = AnneeScolaireSiteClasse::findOrFail($id);
        $anneeScolaireSiteId = anneeScolaireSiteId();

        // Vérification de sécurité
        if ($affectation->annee_scolaire_site_id != $anneeScolaireSiteId) {
            return redirect()->back()
                ->with('error', 'Cette affectation n\'appartient pas à l\'année scolaire et au site actifs.');
        }

        DB::beginTransaction();

        try {
            $className = $affectation->classe->name ?? 'Classe';
            $affectation->delete();

            DB::commit();

            return redirect()->route('affectation-site-classe.index')
                ->with('success', "L'affectation de la classe \"$className\" a été supprimée avec succès.");
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de la suppression : ' . $e->getMessage());
        }
    }
}
