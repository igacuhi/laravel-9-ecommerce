<?php

namespace App\Livewire;

use Livewire\Component;

class WishListIconComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        return view('livewire.wish-list-icon-component');
    }
}
