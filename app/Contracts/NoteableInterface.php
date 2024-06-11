<?php

namespace App\Contracts;

use App\Models\Note;

interface NoteableInterface
{
    
    public function notes();
    public function addNote(Note $note);
    public function removeNote(Note $note);

}
