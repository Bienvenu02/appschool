<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait HasUserStamp
{
    protected static function bootHasUserStamp()
    {
        static::creating(function ($model) {
            if (Auth::check() && empty($model->userCreated_id)) {
                $model->userCreated_id = Auth::id();
            }
        });

        static::updating(function ($model) {
            if (Auth::check()) {
                $model->userUpdated_id = Auth::id();
            }
        });
    }
}
