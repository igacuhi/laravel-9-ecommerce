<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class ShopComponent extends Component
{
    public $product;  // Define the property

    public function mount($product = null)
    {   
        $this->product = $product;
    }
    use WithPagination;
    public function render()
    {
        $products = Product::pagination(12);
        return view('livewire.shop-component', ['product' => $this->product])->layout('layouts.app');
    }
}
