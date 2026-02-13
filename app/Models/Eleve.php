<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable = ['user_id', 'matricule','nom', 'prenom', 'date_naissance', 'lieu_naissance', 'sexe', 'nationalite', 'photo', 'adresse', 'telephone', 'userCreated_id', 'userUpdated_id'];

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }
}
