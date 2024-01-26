<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Session;


class DetailsComponent extends Component
{
    public $slug;
    public $product;
    public $rproduct;
    public function mount($slug)  
    {   
        $this->slug = $slug;

    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success','Item added in cart');
        return redirect()->route('shop-cart');
    }
    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        if ($product) {
            $rproduct = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(4)->get();
          } else {
        $nproducts = Product::latest()->take(4)->get();
        return view('livewire.details-component', ['product' =>$product,'rproducts'=>$rproducts,'nproducts'=>$nproducts])->layout('layouts.app');

    }
} 
}
