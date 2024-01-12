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
        $this->product = Product::where('slug', $this->slug)->first();

    }
    public function render()
    {
        return view('livewire.details-component', ['product' => $this->product]);

    }
    
}
