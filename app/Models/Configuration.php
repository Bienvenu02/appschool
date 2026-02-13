<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuration extends Model
{
    use SoftDeletes, HasUserStamp;

    protected $fillable = [
        'annee_scolaire_en_cours',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }
}
