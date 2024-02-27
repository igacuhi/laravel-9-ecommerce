<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminAddProductComponent extends Component
{
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    
    public function render()
    {
        return view('livewire.admin.admin-add-product-component');
    }
}
