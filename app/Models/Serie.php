<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Serie extends Model
{
    protected $fillable = [
        'name',
        'description',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }
}
