<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'start_date'          => 'date',
        'end_date'            => 'date',
        'early_bird_ended_at' => 'datetime',
    ];
}
