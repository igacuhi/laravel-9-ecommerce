<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    //Component logic here
    public $layout = 'layouts.app';

   public function render()
    {
        return view('livewire.home-component');
    }
}
