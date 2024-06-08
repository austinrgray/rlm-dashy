<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Contracts\Contactable;
use App\Contracts\Invoiceable;
use App\Contracts\Noteable;

use App\Models\Customer;
use App\Models\Business;



class Family extends Model implements Noteable
{
    use HasFactory;

    protected $fillable = [
        'family_id',
        'family_name',
    ];

    public function primaryContact(): HasOne
    {
        return $this->hasOne(Customer::class);
    }

    public function members(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
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