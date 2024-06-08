<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Noteable;

class Invoice extends Model implements Noteable
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'invoice_number',
        'total_amount',
        'remaining_balance',
        'invoiced_date',
        'payment_date',
        'payment_status',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function invoiceable()
    {
        return $this->morphTo();
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