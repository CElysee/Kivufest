<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class QRCode extends Component
{
    public function mount($id){
        $this->ticket_id = $id;
    }
    public function render()
    {
        $this->ticketLink = "https://kivufest.co.rw/validate-ticket/$this->ticket_id";
        return view('livewire.frontend.q-r-code')->layout('layouts.frontend');
    }
}
