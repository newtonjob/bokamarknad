<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'start_date'          => 'date',
        'end_date'            => 'date',
        'early_bird_ended_at' => 'datetime',
    ];

    public function currentPrice(): Attribute
    {
        return Attribute::get(function () {
            return $this->early_bird_ended_at->isFuture()
                ? $this->early_bird_price
                : $this->price;
        });
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Create an event booking for the given user.
     */
    public function book(User $user): void
    {
        $this->bookings()->create([
            'user_id' => $user->id,
            'price'   => $this->current_price,
        ]);
    }
}
