<?php

namespace App\Http\Livewire\Backend\Admin;

use App\Models\MomoTransactions;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
       $ticketLists = \App\Models\Ticket::all();
        foreach ($ticketLists as $data){
            $this->NumberOfTickets($data);
            $this->TotalAmount($data);
            $data['number_of_tickets'] = $this->NumberOfTickets($data);
            $data['total_amount'] = $this->TotalAmount($data);
        }
        $this->tickes_info = $ticketLists;
        $this->recent_transactions = MomoTransactions::where('payment_status', 'SUCCESSFUL')->limit(20)->get();
        return view('livewire.backend.admin.dashboard')->layout('layouts.BackendMaster');
    }
    public function NumberOfTickets($data){
        $numberoftickets = DB::table('momo_transactions')
            ->where('ticket_id',$data->id)
            ->where('payment_status',"SUCCESSFUL")->sum('ticket_number');
        return $numberoftickets;
    }
    public function TotalAmount($data){
        $total_amount = DB::table('momo_transactions')
            ->where('ticket_id',$data->id)
            ->where('payment_status',"SUCCESSFUL")->sum('amount');
        return $total_amount;
    }
}
