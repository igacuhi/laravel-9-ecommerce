<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        unlink('assets/imgs/products/'.product->image);
        $product->delete();
        session()->flash('message','product has been deleted');

    }
    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }
}
