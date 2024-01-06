<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class CreateEvent extends Component
{
    public $name;

    public $price;

    public $start_date;

    public $end_date;

    public $early_bird_price;

    public $early_bird_ended_at;

    public function store()
    {
        Event::create($this->validate([
            'name'                => 'required',
            'start_date'          => 'required|date',
            'end_date'            => 'required|date|after_or_equal:start_date',
            'price'               => 'required|numeric',
            'early_bird_price'    => 'required|numeric',
            'early_bird_ended_at' => 'required|date|before:start_date',
        ]));

        $this->redirectRoute('events.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-event');
    }
}
