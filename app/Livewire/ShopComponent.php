<?php

namespace App\Livewire;

use Livewire\Component;

class ShopComponent extends Component
{
    public $product;  // Define the property

    public function mount($product)
    {
        // Fetch or set the product data here
        $this->product = Product::find(1);  // Example fetching from database
    }

    public function render()
    {
        return view('livewire.shop-component', ['product' => $this->product])->layout('layouts.app');
    }
}
