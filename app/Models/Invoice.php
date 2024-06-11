<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\NoteableInterface;
use App\Traits\Noteable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model implements NoteableInterface
{
    use HasFactory, Noteable;

    protected $fillable = [
        'total_amount',
        'remaining_balance',
        'invoice_date',
        'payment_date',
        'payment_status',
    ];

    public function invoiceable()
    {
        return $this->morphTo();
    }

    public function monuments(): HasMany
    {
        return $this->hasMany(Monument::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

}