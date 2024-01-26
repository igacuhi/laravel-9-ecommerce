<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Session;

class ShopComponent extends Component
{
    public $product;  // Define the property
    public function mount($product = null)
    {   
        $this->product = $product;
    }
    use WithPagination;
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('shop-cart');
    }
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component', ['product' => $this->product,'products'=> $products])->layout('layouts.app');
    }
}
