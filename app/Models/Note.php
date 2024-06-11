<?php

namespace App\Models;

use App\Contracts\NoteableInterface;
use App\Traits\Noteable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model implements NoteableInterface
{
    use HasFactory, Noteable;

    protected $fillable = [
        'content',
        'date_created',
        'edited',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
}