<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classe extends Model
{
    use SoftDeletes, HasUserStamp;
    
    protected $fillable = [
        'name',
        'niveau_id',
        'serie_id',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
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
