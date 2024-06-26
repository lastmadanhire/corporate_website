<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'subtitle',
        'who_we_are',
        'our_vision',
        'our_history',
    ];
}
