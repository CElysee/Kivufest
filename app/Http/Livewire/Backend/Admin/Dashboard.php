<?php

namespace App\Http\Livewire\Backend\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.backend.admin.dashboard')->layout('Layouts.BackendMaster');
    }
}
