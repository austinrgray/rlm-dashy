<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Contracts\NoteableInterface;
use App\Traits\Noteable;

class Order extends Model implements NoteableInterface
{
    use HasFactory, Noteable;

    protected $fillable = [
        'destination',
        'status',
        'ordered_date',
        'date_shipped',
        'date_arrived',
        'date_installed',
    ];

    public function invoiceable(): BelongsTo
    {
        return $this->morphTo();
    }

    public function monuments(): HasMany
    {
        return $this->hasMany(Monument::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}