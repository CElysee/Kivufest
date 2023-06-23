<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $this->ticketList = \App\Models\Ticket::all();
        return view('livewire.frontend.home')->layout('Layouts.frontend');
    }
}
