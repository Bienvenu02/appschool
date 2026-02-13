<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoleUser extends Model
{
    protected $table = 'role_users';

    protected $fillable = [
        'user_id',
        'role_id',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function userCreated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated(): BelongsTo
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }
}
