<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monument extends Model
{
    use HasFactory;

    protected $fillable = [
        'monument_id',
        'manufacturer',
        'inscription',
        'type',
        'color',
        'base_dimensions',
        'die_dimensions',
        'foundation_dimensions'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}