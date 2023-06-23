<?php

namespace App\Http\Livewire\Backend\Admin;

use App\Models\MomoTransactions;
use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        $this->transactions = MomoTransactions::all();
        return view('livewire.backend.admin.transactions')->layout('layouts.BackendMaster');
    }
}
