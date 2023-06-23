<?php

namespace App\Http\Livewire\Backend\Admin;

use Livewire\Component;

class Ticket extends Component
{
    public $newticket;
    public $ticket_title;
    public $ticket_description;
    public $ticket_amount;
    public $ticket_status;
    public $updateMode = false;

//    public function mount($ticket_title=null, $ticket_description=null, $ticket_amount=null, $ticket_status=null){
//        $this->ticket_title = $ticket_title;
//        $this->ticket_description = $ticket_description;
//        $this->ticket_amount = $ticket_amount;
//        $this->ticket_status = $ticket_status;
//    }

    public function create(){

        $this->validate([
            'ticket_title' => ['required'],
            'ticket_description' => ['required'],
            'ticket_amount' => ['required'],
            'ticket_status' => ['required'],
        ]);
        $newticket = \App\Models\Ticket::create([
            'ticket_title' => $this->ticket_title,
            'ticket_description' => $this->ticket_description,
            'ticket_amount' => $this->ticket_amount,
            'ticket_status' => $this->ticket_status,
        ]);

        session()->flash('success','Successfully added new ticket');
        $this->emit('userStore'); // Close model to using to jquery
        $this->resetInputFields();
        $this->emit('avatar_preview_updated', $this->newticket);
    }
    private function resetInputFields(){
        $this->ticket_title = '';
        $this->ticket_description = '';
        $this->ticket_amount = '';
        $this->ticket_status = '';
    }
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
    public function render()
    {
        $this->ticketList = \App\Models\Ticket::all();
        return view('livewire.backend.admin.ticket')->layout('layouts.BackendMaster');
    }
}
