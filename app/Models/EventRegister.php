<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'location',
        'destination',
        'qualification',
        'date',
        'score',
        'event_id',
    ];

    // Define the relationship with the Event model
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
