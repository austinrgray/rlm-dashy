<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Contracts\Noteable;

class Order extends Model implements Noteable
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'invoice_id',
        'destination',
        'status',
        'ordered_date',
        'date_shipped',
        'date_arrived',
        'date_installed',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contactable()
    {
        return $this->morphTo();
    }
    
    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }

    public function monuments(): HasMany
    {
        return $this->hasMany(Monument::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function createNote(array $noteDetails): Note
    {
        // Logic to create a new note
        $note = new Note();
        $note->fill($noteDetails);
        $note->save();

        return $note;
    }
}