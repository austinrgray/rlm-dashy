<?php

namespace App\Contracts;

interface Contactable
{
    public function getFirstName(): ?string;
    public function getMiddleName(): ?string;
    public function getLastName(): ?string;
    public function getBusinessName(): ?string;
    public function getMailingAddress(): ?string;
    public function getMailingCity(): ?string;
    public function getMailingState(): ?string;
    public function getMailingZip(): ?string;
    public function getPhonePrimary(): ?string;
    public function getPhoneSecondary(): ?string;
    public function getEmail(): ?string;
}