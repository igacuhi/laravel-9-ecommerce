<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Session;
use App\Models\Category;

class SearchComponent extends Component
{
    public $product;  // Define the property
    
    use WithPagination;
    public $pagesize = 12;
    public $orderBy="Default sorting";

    public $q;
    public $search_term;

    public function mount($product = null)
    {
        $this->product = $product;
        $this->fill(request()->only('q'));
        $this->search_term = "%".$this->q . "%";
    }

    public function store($product_id,$product_name,$product_price){
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in cart');
        $this->emitTo('cart-icon-component','refreshComponent');
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
            $products = Product::where('name','like',$this->search_term)->orderBy('regular_price','ASC')-> paginate($this->pagesize);
        }
        elseif($this->orderBy == 'Price: High to Low')
        {
            $products = Product::where('name','like',$this->search_term)->orderBy('regular_price','DESC')-> paginate($this->pagesize);

        }
        elseif ($this->orderBy == 'Sort by Newness') {
            $products = Product::where('name','like',$this->search_term)->orderBy('created_at','DESC')-> paginate($this->pagesize);

        }
        else{
            $products = Product::where('name','like',$this->search_term)->paginate($this->pagesize);

        }
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.search-component', [
            'product' => $this->product,
            'products' => $products,
            'categories' => $categories, // Assuming it's an array or object
        ])->layout('layouts.app');
        
    }
}
