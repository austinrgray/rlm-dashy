<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Note;

trait Noteable
{

    public function notes(): MorphMany 
    {
        return $this->morphMany(Note::class, 'noteable');
    }

    public function addNote(Note $note)
    {
        return $this->notes()->save($note);
    }

    public function removeNote(Note $note)
    {
        return $note->delete();
    }

}
