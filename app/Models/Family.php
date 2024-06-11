<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Contracts\ContactableInterface;
use App\Contracts\InvoiceableInterface;
use App\Contracts\NoteableInterface;
use App\Traits\Contactable;
use App\Traits\Invoiceable;
use App\Traits\Noteable;

use App\Models\Customer;
use App\Models\Business;



class Family extends Model implements ContactableInterface, InvoiceableInterface, NoteableInterface
{
    use HasFactory, Contactable, Invoiceable, Noteable;

    protected $fillable = [
        'family_name',
    ];

    public function members(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function businesses(): HasMany
    {
        return $this->hasMany(Business::class);
    }

    public function addMember(Customer $member)
    {
        return $this->members()->save($member);
    }

    public function addBusiness(Business $business)
    {
        return $this->businesses()->save($business);
    }

    public function removeMember(Customer $member)
    {
        return $member->delete();
    }

    public function removeBusiness(Business $business)
    {
        return $business->delete();
    }
    
}