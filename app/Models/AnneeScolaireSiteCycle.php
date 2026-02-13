<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;

class AnneeScolaireSiteCycle extends Model
{

    use HasUserStamp;

    protected $table = 'annee_scolaire_site_cycle';

    public $incrementing = false; // Pas d'id auto-incrémenté
    protected $primaryKey = null; // Car clé composite

    protected $fillable = [
        'annee_scolaire_site_id',
        'cycle_id',
        'userCreated_id',
        'userUpdated_id',
    ];
}
