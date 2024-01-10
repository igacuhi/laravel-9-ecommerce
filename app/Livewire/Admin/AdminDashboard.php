<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component
{    //component logic
    public function render()
    {
        return view('livewire.admin.admin-dashboard')->layout('layouts.app');
    }
}
