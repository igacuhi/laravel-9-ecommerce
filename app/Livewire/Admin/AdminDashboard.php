<?php
namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboard extends Component 
{   
    public function render()
    {      
         dump('Admin Dashboard component rendered');
        return view('livewire.admin.admin-dashboard')->layout('layouts.app');
    }
}
