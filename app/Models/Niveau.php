<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Niveau extends Model
{
    use HasUserStamp, SoftDeletes;
    
    protected $fillable = ['name', 'cycle_id', 'order', 'code'];

    public function cycle()
    {
        return $this->belongsTo(Cycle::class);
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
