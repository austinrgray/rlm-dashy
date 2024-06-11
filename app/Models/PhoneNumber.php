<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = ['phone_number', 'is_primary'];
    
    protected $attributes = [
        'phone_number' => '',
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