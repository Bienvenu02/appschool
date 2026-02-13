<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
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
