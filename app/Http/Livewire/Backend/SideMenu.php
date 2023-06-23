<?php

namespace App\Http\Livewire\Backend;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SideMenu extends Component
{
    public function render()
    {
        $this->total_amount = DB::table('momo_transactions')
            ->where('payment_status',"SUCCESSFUL")->sum('amount');
        $this->numberoftickets = DB::table('momo_transactions')
            ->where('payment_status',"SUCCESSFUL")->sum('ticket_number');
        return view('livewire.backend.side-menu');
    }
}
