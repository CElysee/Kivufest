<?php

namespace App\Http\Livewire\Backend\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $this->ticketList = \App\Models\Ticket::all();
        return view('livewire.backend.admin.dashboard')->layout('layouts.BackendMaster');
    }
}
