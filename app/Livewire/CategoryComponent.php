<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use Illuminate\Support\Facades\Session;
use App\Models\Category;

class CategoryComponent extends Component
{
    public $product;  // Define the property
    
    use WithPagination;
    public $pagesize = 12;
    public $orderBy="Default sorting";
    public $slug;

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

    public function mount($slug, $product = null)
        {
            $this->slug = $slug;
            $this->product = $product;
        }
    public function render()
    {
        $category = Category::where('slug',$this->slug)->first();
        $category_id = $category_id;
        $category_name = $category_name;
        if($this->orderBy == 'Price: Low to High')
        {
            $products = Product::where('category_id',$category_id)->orderBy('regular_price','ASC')-> paginate($this->pagesize);
        }
        elseif($this->orderBy == 'Price: High to Low')
        {
            $products = Product::where('category_id',$category_id)->orderBy('regular_price','DESC')-> paginate($this->pagesize);

        }
        elseif ($this->orderBy == 'Sort by Newness') {
            $products = Product::where('category_id',$category_id)->orderBy('created_at','DESC')-> paginate($this->pagesize);

        }
        else{
            $products = Product::where('category_id',$category_id)->paginate($this->pagesize);

        }
        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.Category-component', [
            'product' => $this->product,
            'products' => $products,
            'categories' => $categories, // Assuming it's an array or object
            'category_name'=> $category_name,php
        ])->layout('layouts.app');
        
    }
}
