<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Session;
use App\Models\Category;

class ShopComponent extends Component
{
    public $product;  // Define the property
    use WithPagination;
    public $pagesize = 12;
    public $orderBy="Default sorting";
    public $min_value = 0;
    public $max_value = 1000;

    public function mount($product = null)
    {   
        $this->product = $product;
    }
    
    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
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

    public function addToWishlist( $product_id, $product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }
     
    public function remmoveFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            Cart::instance('wishlist')->remove($witem->rowId);
            $this->emitTo('wishlist-icon-component','refreshComponent');
            return;
        }
    }

    public function render()
    {
        if($this->orderBy == 'Price: Low to High')
        {
            $products = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','ASC')-> paginate($this->pagesize);
        }
        elseif($this->orderBy == 'Price: High to Low')
        {
            $products = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','DESC')-> paginate($this->pagesize);

        }
        elseif ($this->orderBy == 'Sort by Newness') {
            $products = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('created_at','DESC')-> paginate($this->pagesize);

        }
        else{
            $products = Product::whereBetween('regular_price',[$this->min_value,$this->max_value])->paginate($this->pagesize);

        }
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.shop-component', [
            'product' => $this->product,
            'products' => $products,
            'categories' => $categories, // Assuming it's an array or object
        ])->layout('layouts.app');
        
    }
}
