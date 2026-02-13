<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;

class AnneeScolaireSite extends Model
{
    use HasUserStamp;

    protected $table = 'annee_scolaire_sites';

    protected $fillable = [
        'annee_scolaire_id',
        'site_id',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class, 'annee_scolaire_id');
    }

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }

    public function classesAffectees()
    {
        return $this->hasMany(AnneeScolaireSiteClasse::class, 'annee_scolaire_site_id');
    }
}