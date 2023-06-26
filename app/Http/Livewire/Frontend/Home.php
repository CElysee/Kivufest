<?php

namespace App\Http\Livewire\Frontend;

use App\Models\MomoTransactions;
use App\Models\TicketGenerated;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $this->ticketList = \App\Models\Ticket::all();
        return view('livewire.frontend.home')->layout('layouts.frontend');
    }
}
