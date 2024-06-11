<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\PhoneNumber;
use App\Models\EmailAddress;
use App\Models\MailingAddress;

trait Contactable
{
    public function phoneNumbers(): MorphMany
    {
        return $this->morphMany(PhoneNumber::class, 'contactable');
    }

    public function emailAddresses(): MorphMany
    {
        return $this->morphMany(PhoneNumber::class, 'contactable');
    }

    public function mailingAddresses(): MorphMany
    {
        return $this->morphMany(PhoneNumber::class, 'contactable');
    }

    public function getPrimaryPhoneNumber()
    {
        return $this->phoneNumbers()->where('is_primary', true)->first();
    }

    public function getPrimaryEmailAddress()
    {
        return $this->emailAddresses()->where('is_primary', true)->first();
    }

    public function getPrimaryMailingAddress()
    {
        return $this->mailingAddresses()->where('is_primary', true)->first();
    }

    public function addPhoneNumber(PhoneNumber $phone_number)
    {
        return $this->phoneNumbers()->save($phone_number);
    }

    public function addEmailAddress(EmailAddress $email_address)
    {
        return $this->emailAddresses()->save($email_address);
    }

    public function addMailingAddress(MailingAddress $mailing_address)
    {
        return $this->mailingAddresses()->save($mailing_address);
    }

    public function removePhoneNumber(PhoneNumber $phone_number)
    {
        return $phone_number->delete();
    }

    public function removeEmailAddress(EmailAddress $email_address)
    {
        return $email_address->delete();
    }
    
    public function removeMailingAddress(MailingAddress $mailing_address)
    {
        return $mailing_address->delete();
    }
}