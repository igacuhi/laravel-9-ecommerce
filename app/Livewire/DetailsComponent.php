<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Product;

class DetailsComponent extends Component
{
    public $slug;
    public $product;
    public function mount($slug)  
    {   
        $this->slug = $slug;

    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.details-component', ['product' =>$product])->layout('layouts.app');

    }
    
}
