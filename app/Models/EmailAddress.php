<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAddress extends Model
{
    use HasFactory;

    protected $fillable = ['email_address', 'is_primary'];
    
    protected $attributes = [
        'email_address' => '',
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
