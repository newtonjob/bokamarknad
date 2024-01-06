<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventIndex extends Component
{
    public function render()
    {
        return view('livewire.event-index', [
            'events' => Event::all(),
        ]);
    }
}
