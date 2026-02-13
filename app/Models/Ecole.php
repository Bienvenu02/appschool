<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ecole extends Model
{

    use SoftDeletes, HasUserStamp;

    protected $fillable = [
        'name',
        'code',
        'slogan',
        'logo',
        'email',
        'telephone',
        'adresse',
        'ville',
        'pays',
        'site_web',
        'description',
        'ifu',
        'active',
        'userCreated_id',
        'userUpdated_id',
    ];

    public function logo(): string{
        return Storage::url($this->logo);
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
