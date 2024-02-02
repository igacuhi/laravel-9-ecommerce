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
    public $pagesize = 12;
    public $orderBy="Default sorting";
    
    public function store($product_id,$product_name,$product_price){
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in cart');
        return redirect()->route('shop-cart');
    }

    public function changePageSize($size)
    {
        $this->pagesize = $size;
    }

    public function changeOrderBy($order)
    {
        $this ->orderBy = $order;
    }

    public function render()
    {
        if($this->orderBy == 'Price: Low to High')
        {
            $products = Product::orderBy('regular_price','ASC')-> paginate($this->pagesize);
        }
        elseif($this->orderBy == 'Price: High to Low')
        {
            $products = Product::orderBy('regular_price','DESC')-> paginate($this->pagesize);

        }
        elseif ($this->orderBy == 'Sort by Newness') {
            $products = Product::orderBy('created_at','DESC')-> paginate($this->pagesize);

        }
        else{
            $products = Product::paginate($this->pagesize);

        }
        return view('livewire.shop-component', ['product' => $this->product,'products'=> $products])->layout('layouts.app');
    }
}
