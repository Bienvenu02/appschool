<?php

namespace App\Models;

use App\Traits\HasUserStamp;
use Illuminate\Database\Eloquent\Model;

class SiteUser extends Model
{

    use HasUserStamp;

    protected $table = 'site_users';

    protected $fillable = [
        'site_id',
        'user_id',
        'userCreated_id',
        'userUpdated_id'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
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
