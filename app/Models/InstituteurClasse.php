<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstituteurClasse extends Model
{
    protected $table = 'instituteur_classe';

    protected $fillable = [
        'enseignant_id',
        'classe_id',
        'annee_scolaire_id',
    ];
}
