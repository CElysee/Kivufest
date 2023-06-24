<?php

namespace App\Http\Livewire\Frontend;

use App\Models\MomoTransactions;
use App\Models\Ticket;
use App\Models\TicketGenerated;
use Livewire\Component;

class ValidateTicket extends Component
{
    public $validation_status;
    public $validation_message;
    public $use_code;

    public function mount($id){
        $this->ticket_id = $id;
    }
    public function useTicket(){
        if($this->use_code == "63gang"){
            $update_ticket = \App\Models\TicketGenerated::where('ticket_number', $this->ticket_id)->first();
            $update_ticket->ticket_status =  "Used";
            $update_ticket->save();
            $this->validation_message = "SUCCESSFUL";
        }else{
            session()->flash('success', "Passcode not valid");
        }
    }
    public function render()
    {
        $this->ticket_info = TicketGenerated::where('ticket_number', $this->ticket_id)->first();
        $this->transaction_info = MomoTransactions::where('id', $this->ticket_info->client_id)->first();
        return view('livewire.frontend.validate-ticket')->layout('layouts.frontend');
    }
}
