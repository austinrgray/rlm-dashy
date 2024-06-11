<?php

namespace App\Contracts;

use App\Models\PhoneNumber;
use App\Models\EmailAddress;
use App\Models\MailingAddress;

interface ContactableInterface
{

    public function phoneNumbers();
    public function emailAddresses();
    public function mailingAddresses();

    public function getPrimaryPhoneNumber();
    public function getPrimaryEmailAddress();
    public function getPrimaryMailingAddress();

    public function addPhoneNumber(PhoneNumber $phone_number);
    public function addEmailAddress(EmailAddress $email_address);
    public function addMailingAddress(MailingAddress $mailing_address);

    public function removePhoneNumber(PhoneNumber $phone_number);
    public function removeEmailAddress(EmailAddress $email_address);
    public function removeMailingAddress(MailingAddress $mailing_address);
    
}