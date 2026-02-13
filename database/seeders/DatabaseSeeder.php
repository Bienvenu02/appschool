<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cycle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Enregistrement du super admin
        DB::table('users')->insert([
            ['name' => 'SuperAdmin', 'email' => 'bienvenuhounye05@gmail.com', 'password' => Hash::make('123456'), 'userCreated_id' => 1, 'created_at' => now()],
            ['name' => 'Admin', 'email' => 'bienvenuhounye06@gmail.com', 'password' => Hash::make('123456'), 'userCreated_id' => 1, 'created_at' => now()],
        ]);

        // Creation de roles de base
        $roles = ['super admin', 'admin', 'administrateur site', 'instituteur', 'professeur', 'tuteur', 'eleve'];
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role,
                'userCreated_id' => 1,
                'created_at' => now(),
            ]);
        }

        // Donner le role de super_admin et admin aux utilisateurs crees
        DB::table('role_users')->insert([
            ['user_id' => 1, 'role_id' => 1, 'userCreated_id' => 1, 'created_at' => now()],
            ['user_id' => 2, 'role_id' => 2, 'userCreated_id' => 1, 'created_at' => now()]
        ]);

        // Enregistrement des cycles
        $cycles = ['maternelle', 'primaire', 'secondaire', 'lycee', 'universsite'];
        foreach ($cycles as $cycle) {
            Cycle::create(['name' => $cycle, 'userCreated_id' => 1, 'created_at' => now()]);
        }

        // Enregistrement des groupes scolaires
        DB::table('groupes')->insert([
            ['name' => 'Groupe A', 'userCreated_id' => 1, 'created_at' => now()],
        ]);

        // Enregistrement des niveaux
        $niveaux = [
            ['code' => 'PS', 'name' => 'Maternelle 1', 'order' => 1, 'cycle_id' => 1],
            ['code' => 'GS', 'name' => 'Maternelle 2', 'order' => 2, 'cycle_id' => 1],
            ['code' => 'CI', 'name' => 'Cours d\'initiation', 'order' => 3, 'cycle_id' => 2],
            ['code' => 'CP', 'name' => 'Cours Préparatoire', 'order' => 4, 'cycle_id' => 2],
            ['code' => 'CE1', 'name' => 'Cours Élémentaire 1', 'order' => 5, 'cycle_id' => 2],
            ['code' => 'CE2', 'name' => 'Cours Élémentaire 2', 'order' => 6, 'cycle_id' => 2],
            ['code' => 'CM1', 'name' => 'Cours Moyen 1', 'order' => 7, 'cycle_id' => 2],
            ['code' => 'CM2', 'name' => 'Cours Moyen 2', 'order' => 8, 'cycle_id' => 2],
            ['code' => '6eme', 'name' => 'Sixième', 'order' => 9, 'cycle_id' => 3],
            ['code' => '5eme', 'name' => 'Cinquième', 'order' => 10, 'cycle_id' => 3],
            ['code' => '4eme', 'name' => 'Quatrième', 'order' => 11, 'cycle_id' => 3],
            ['code' => '3eme', 'name' => 'Troisième', 'order' => 12, 'cycle_id' => 3],
            ['code' => '2nde', 'name' => 'Seconde', 'order' => 13, 'cycle_id' => 3],
            ['code' => '1ere', 'name' => 'Première', 'order' => 14, 'cycle_id' => 3],
            ['code' => 'Tle', 'name' => 'Terminale', 'order' => 15, 'cycle_id' => 3],
        ];
        foreach ($niveaux as $niveau) {
            DB::table('niveaux')->insert([
                'code' => $niveau['code'],
                'name' => $niveau['name'],
                'order' => $niveau['order'],
                'cycle_id' => $niveau['cycle_id'],
                'userCreated_id' => 1,
                'created_at' => now(),
            ]);
        }

        // Enregistrement des series
        $series = ['A1', 'A2', 'B', 'C', 'D', 'E', 'F1', 'F2', 'F3', 'F4', 'G1', 'G2', 'G3'];
        foreach ($series as $serie) {
            DB::table('series')->insert([
                'name' => $serie,
                'userCreated_id' => 1,
                'created_at' => now(),
            ]);
        }

        // Enregistrement des classes
        $classes = [
            ['name' => 'PS', 'niveau_id' => 1, 'serie_id' => null],
            ['name' => 'GS', 'niveau_id' => 2, 'serie_id' => null],
            ['name' => 'CI', 'niveau_id' => 3, 'serie_id' => null],
            ['name' => 'CP', 'niveau_id' => 4, 'serie_id' => null],
            ['name' => 'CE1', 'niveau_id' => 5, 'serie_id' => null],
            ['name' => 'CE2', 'niveau_id' => 6, 'serie_id' => null],
            ['name' => 'CM1', 'niveau_id' => 7, 'serie_id' => null],
            ['name' => 'CM2', 'niveau_id' => 8, 'serie_id' => null],
            ['name' => '6eme', 'niveau_id' => 9, 'serie_id' => null],
            ['name' => '5eme', 'niveau_id' => 10, 'serie_id' => null],
            ['name' => '4eme', 'niveau_id' => 11, 'serie_id' => null],
            ['name' => '3eme', 'niveau_id' => 12, 'serie_id' => null],
            ['name' => '2nde A1', 'niveau_id' => 13, 'serie_id' => 1],
            ['name' => '2nde A2', 'niveau_id' => 13, 'serie_id' => 2],
            ['name' => '2nde B', 'niveau_id' => 13, 'serie_id' => 3],
            ['name' => '2nde C', 'niveau_id' => 13, 'serie_id' => 4],
            ['name' => '2nde D', 'niveau_id' => 13, 'serie_id' => 5],
            ['name' => '2nde E', 'niveau_id' => 13, 'serie_id' => 6],
            ['name' => '2nde F1', 'niveau_id' => 13, 'serie_id' => 7],
            ['name' => '2nde F2', 'niveau_id' => 13, 'serie_id' => 8],
            ['name' => '2nde F3', 'niveau_id' => 13, 'serie_id' => 9],
            ['name' => '2nde F4', 'niveau_id' => 13, 'serie_id' => 10],
            ['name' => '2nde G1', 'niveau_id' => 13, 'serie_id' => 11],
            ['name' => '2nde G2', 'niveau_id' => 13, 'serie_id' => 12],
            ['name' => '2nde G3', 'niveau_id' => 13, 'serie_id' => 13],
            ['name' => '1ere A1', 'niveau_id' => 14, 'serie_id' => 1],
            ['name' => '1ere A2', 'niveau_id' => 14, 'serie_id' => 2],
            ['name' => '1ere B', 'niveau_id' => 14, 'serie_id' => 3],
            ['name' => '1ere C', 'niveau_id' => 14, 'serie_id' => 4],
            ['name' => '1ere D', 'niveau_id' => 14, 'serie_id' => 5],
            ['name' => '1ere E', 'niveau_id' => 14, 'serie_id' => 6],
            ['name' => '1ere F1', 'niveau_id' => 14, 'serie_id' => 7],
            ['name' => '1ere F2', 'niveau_id' => 14, 'serie_id' => 8],
            ['name' => '1ere F3', 'niveau_id' => 14, 'serie_id' => 9],
            ['name' => '1ere F4', 'niveau_id' => 14, 'serie_id' => 10],
            ['name' => '1ere G1', 'niveau_id' => 14, 'serie_id' => 11],
            ['name' => '1ere G2', 'niveau_id' => 14, 'serie_id' => 12],
            ['name' => '1ere G3', 'niveau_id' => 14, 'serie_id' => 13],
            ['name' => 'Tle A1', 'niveau_id' => 15, 'serie_id' => 1],
            ['name' => 'Tle A2', 'niveau_id' => 15, 'serie_id' => 2],
            ['name' => 'Tle B', 'niveau_id' => 15, 'serie_id' => 3],
            ['name' => 'Tle C', 'niveau_id' => 15, 'serie_id' => 4],
            ['name' => 'Tle D', 'niveau_id' => 15, 'serie_id' => 5],
            ['name' => 'Tle E', 'niveau_id' => 15, 'serie_id' => 6],
            ['name' => 'Tle F1', 'niveau_id' => 15, 'serie_id' => 7],
            ['name' => 'Tle F2', 'niveau_id' => 15, 'serie_id' => 8],
            ['name' => 'Tle F3', 'niveau_id' => 15, 'serie_id' => 9],
            ['name' => 'Tle F4', 'niveau_id' => 15, 'serie_id' => 10],
            ['name' => 'Tle G1', 'niveau_id' => 15, 'serie_id' => 11],
            ['name' => 'Tle G2', 'niveau_id' => 15, 'serie_id' => 12],
            ['name' => 'Tle G3', 'niveau_id' => 15, 'serie_id' => 13],
        ];
        foreach ($classes as $classe) {
            DB::table('classes')->insert([
                'name' => $classe['name'],
                'niveau_id' => $classe['niveau_id'],
                'serie_id' => $classe['serie_id'],
                'userCreated_id' => 1,
                'created_at' => now(),
            ]);
        }

        // Enregistrement des configurations par défaut
        DB::table('configurations')->insert([
            ['maintenance' => false, 'annee_scolaire_en_cours' => null, 'userCreated_id' => 1, 'created_at' => now()],
        ]);


        // Ajouter les autres seeders ici si nécessaire
        $this->call([
            
        ]);
    }
}
