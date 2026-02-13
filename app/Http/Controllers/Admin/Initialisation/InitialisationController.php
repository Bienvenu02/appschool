<?php

namespace App\Http\Controllers\Admin\Initialisation;

use App\Models\Site;
use App\Models\User;
use App\Models\Cycle;
use App\Models\Ecole;
use Illuminate\Http\Request;
use App\Models\AnneeScolaire;
use App\Models\Configuration;
use App\Models\AnneeScolaireSite;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AnneeScolaireSiteCycle;
use App\Http\Requests\Initilisation\InitialisationRequest;
use App\Models\SiteUser;

class InitialisationController extends Controller
{
    public function initialisation()
    {
        return !Ecole::first()
            ? view('admin.initialisation.initialisation', ['ecole' => Ecole::first()])
            : to_route('verification.acces');
    }

    public function store(InitialisationRequest $request)
    {
        // Eviter les insertion sequentielle
        DB::transaction(function () use ($request) {

            // Enregistrement ecole
            if (!Ecole::first()) {
                Ecole::create([
                    'name' => $request->name,
                    'code' => $request->code,
                    'slogan' => $request->slogan,
                    'ifu' => $request->ifu,
                    'email' => $request->email,
                    'telephone' => $request->telephone,
                    'adresse' => $request->adresse,
                    'ville' => $request->ville,
                    'pays' => $request->pays,
                    'site_web' => $request->site_web,
                    'description' => $request->description,
                    'logo' => $request->file('logo') ? $request->file('logo')->store('logos', 'public') : null,
                ]);
            }

            // Enregistrer l'année scolaire
            $libelle = $request->annee_scolaire;
            $annee_debut = (int) substr($libelle, 0, 4);
            $annee_fin   = (int) substr($libelle, 5, 4);

            $annee_scolaire = AnneeScolaire::firstOrCreate(
                ['libelle' => $libelle],
                [
                    'debut'   => "$annee_debut-09-01",
                    'fin'     => "$annee_fin-06-30",
                    'active'  => true,
                    'userCreated_id' => 1
                ]
            );

            // Boucler sur les sites
            foreach ($request->sites as $site_data) {
                $site = Site::create([
                    'name' => $site_data['name'],
                    'localisation' => $site_data['localisation'] ?? null,
                    'telephone' => $site_data['telephone'] ?? null,
                    'email' => $site_data['email'] ?? null,
                    'responsable' => $site_data['responsable'] ?? null,
                    'active' => isset($site_data['active']) ? 1 : 0,
                    'description' => $site_data['description'] ?? null,
                ]);

                // Créer la relation année scolaire <-> site
                $annee_scolaire_site = AnneeScolaireSite::create([
                    'annee_scolaire_id' => $annee_scolaire->id,
                    'site_id' => $site->id,
                ]);

                // Lier les cycles sélectionnés
                if (!empty($site_data['cycles'])) {
                    foreach ($site_data['cycles'] as $cycle_name) {
                        $cycle = Cycle::where('name', $cycle_name)->first();
                        if ($cycle) {
                            AnneeScolaireSiteCycle::create([
                                'annee_scolaire_site_id' => $annee_scolaire_site->id,
                                'cycle_id' => $cycle->id,
                            ]);
                        }
                    }
                }

                //Affecter le site a l'administrateur
                $user_super_admin = User::find(1);
                $user_admin = User::find(2);
                foreach ([$user_super_admin, $user_admin] as $userSuperadminOrAdmin) {
                    SiteUser::create([
                        'site_id' => $site->id,
                        'user_id' => $userSuperadminOrAdmin->id,
                    ]);
                }
            }

            // mettre a jour l'annee scolaire en cours dans la configuration
            $configuration = Configuration::first();
            if ($configuration) {
                $configuration->update([
                    'annee_scolaire_en_cours' => 1,
                ]);
            }
        });

        return to_route('verification.acces')->with('success', 'Initialisation effectuée avec succès.');
    }
}
