<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'status',
        'role',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }

    public function notes(): HasMany{
        return $this->hasMany(Note::class);
    }

    /*
    public function tasks(): HasMany{
        return $this->hasMany(Task::class);
    }

    expand on the actual model. You know it can relate to businesses, other customers, and leads. Also provide the traits you think appropriate for such a model
    */

    /*
    public function contactRecords(): HasMany{
        return $this->hasMany(ContactRecords::class);
    }
    */
}