<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailingAddress extends Model
{
    use HasFactory;

    protected $fillable = ['address_line_one', 'address_line_two', 'city', 'state', 'zipcode', 'is_primary'];
    
    protected $attributes = [
        'address_line_one' => '',
        'address_line_two' => '',
        'city' => '',
        'state' => '',
        'zipcode' => '',
        'is_primary' => false,
    ];

    protected $casts = [
        'is_primary' => 'boolean',
    ];

    public function contactable()
    {
        return $this->morphTo();
    }
    
}
