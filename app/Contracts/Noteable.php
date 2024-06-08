<?php

namespace App\Contracts;
use App\Models\Note;

interface Noteable
{
    public function createNote(array $noteDetails): Note;
}