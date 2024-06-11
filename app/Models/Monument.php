<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monument extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'inscription',
        'type',
        'color',
        'base_dimensions',
        'die_dimensions',
        'foundation_dimensions',
        'is_installed',
    ];

    protected $casts = [
        'is_installed' => 'boolean',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}