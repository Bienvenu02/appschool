<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnneeScolaireSiteClasse extends Model
{
    protected $fillable = [
        'annee_scolaire_site_id',
        'classe_id',
        'groupe_id',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function anneeScolaireSite()
    {
        return $this->belongsTo(AnneeScolaireSite::class, 'annee_scolaire_site_id');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'groupe_id');
    }
    
    public function userCreated()
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }
    
    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }
}