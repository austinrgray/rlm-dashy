<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Contracts\ContactableInterface;
use App\Contracts\InvoiceableInterface;
use App\Contracts\NoteableInterface;
use App\Traits\Contactable;
use App\Traits\Invoiceable;
use App\Traits\Noteable;

class Customer extends Model implements ContactableInterface, InvoiceableInterface, NoteableInterface
{
    use HasFactory, Contactable, Invoiceable, Noteable;

    protected $fillable = ['first_name', 'middle_name', 'last_name'];

    public function families(): BelongsToMany
    {
        return $this->belongsToMany(Family::class);
    }

}