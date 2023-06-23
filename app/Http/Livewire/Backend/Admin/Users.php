<?php

namespace App\Http\Livewire\Backend\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $this->users = User::all();
        return view('livewire.backend.admin.users')->layout('layouts.BackendMaster');
    }
}
