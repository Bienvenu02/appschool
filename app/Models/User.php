<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'password_changed_at',
        'must_change_password',
        'code',
        'userCreated_id',
        'userUpdated_id',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function loginHistories(): HasMany
    {
        return $this->hasMany(LoginHistory::class);
    }

    public function sites(): HasMany
    {
        return $this->hasMany(SiteUser::class);
    }

    public function roles(): HasMany
    {
        return $this->hasMany(RoleUser::class);
    }

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'userCreated_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'userUpdated_id');
    }

    public function lastConnection()
    {
        return $this->hasOne(LoginHistory::class)->latestOfMany();
    }

    public function updatedAtForHumans(): string
    {
        $last_edit = $this->updated_at ?? $this->created_at;
        $timestamp = strtotime($last_edit);
        $diff = time() - $timestamp;

        if ($diff < 60) {
            return $diff . ' secondes';
        } elseif ($diff < 3600) {
            $minutes = floor($diff / 60);
            return $minutes . ' minute' . ($minutes > 1 ? 's' : '');
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            return $hours . ' heure' . ($hours > 1 ? 's' : '');
        } elseif ($diff < 604800) {
            $days = floor($diff / 86400);
            return $days . ' jour' . ($days > 1 ? 's' : '');
        } elseif ($diff < 2419200) {
            $weeks = floor($diff / 604800);
            return $weeks . ' semaine' . ($weeks > 1 ? 's' : '');
        } elseif ($diff < 29030400) {
            $months = floor($diff / 2419200);
            return $months . ' mois';
        } else {
            $years = floor($diff / 29030400);
            return $years . ' an' . ($years > 1 ? 's' : '');
        }
    }
}
