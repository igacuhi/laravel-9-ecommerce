<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{  //Component logic here

   public function render()
    {
        return view('livewire.home-component')->layout('layouts.app');
    }
}
