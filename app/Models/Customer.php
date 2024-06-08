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

class Customer extends Model implements Contactable, Invoiceable, Noteable
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
    ];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function createInvoice(array $invoiceDetails): Invoice
    {
        // Logic to create a new note
        $invoice = new Invoice();
        $invoice->fill($invoiceDetails);
        $invoice->save();

        return $invoice;
    }

    public function createNote(array $noteDetails): Note
    {
        // Logic to create a new note
        $note = new Note();
        $note->fill($noteDetails);
        $note->save();

        return $note;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function getMiddleName(): ?string
    {
        return $this->middle_name;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function getBusinessName(): ?string
    {
        return null; // Null for customers
    }

    public function getMailingAddress(): ?string
    {
        return $this->mailing_address;
    }

    public function getMailingCity(): ?string
    {
        return $this->mailing_city;
    }

    public function getMailingState(): ?string
    {
        return $this->mailing_state;
    }

    public function getMailingZip(): ?string
    {
        return $this->mailing_zip;
    }

    public function getPhonePrimary(): ?string
    {
        return $this->phone_primary;
    }

    public function getPhoneSecondary(): ?string
    {
        return $this->phone_secondary;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
    
}