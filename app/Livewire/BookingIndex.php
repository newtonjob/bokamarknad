<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class BookingIndex extends Component
{
    public $event_id;

    public function filter(Builder $builder)
    {
        $builder->with('user', 'event')
            ->unless(auth()->user()->admin)
            ->whereBelongsTo(auth()->user())

            ->when($this->event_id)
            ->where('event_id', $this->event_id);
    }

    public function render()
    {
        return view('livewire.booking-index', [
            'events'   => Event::all(),
            'bookings' => Booking::tap($this->filter(...))->get(),
        ]);
    }
}
