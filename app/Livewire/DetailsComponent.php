<?php

namespace App\Livewire;
use Livewire\Component;

class DetailsComponent extends Component
{
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        return view('livewire.details-component',['product'=>$product]);
    }
}
