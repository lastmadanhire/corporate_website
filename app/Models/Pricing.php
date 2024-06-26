<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'description',
        'features',
    ];
    protected $casts = [
        'features' => 'array',
    ];

}
