<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{

    use SoftDeletes, HasUserStamp;

    protected $fillable = [
        'name',
        'localisation',
        'telephone',
        'email',
        'responsable',
        'active',
        'description',
        'userCreated_id',
        'userUpdated_id',
    ];

    protected $casts = [
        'active' => 'boolean',
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
