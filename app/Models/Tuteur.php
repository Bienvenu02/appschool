<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tuteur extends Model
{
    use SoftDeletes;

    protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'userCreated_id', 'userUpdated_id'];

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }
}
