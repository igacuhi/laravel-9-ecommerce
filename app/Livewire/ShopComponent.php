<?php

namespace App\Livewire;

use Livewire\Component;

class ShopComponent extends Component
{
    public $product;  // Define the property

    public function mount($product = null)
    {   
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.shop-component', ['product' => $this->product])->layout('layouts.app');
    }
}
