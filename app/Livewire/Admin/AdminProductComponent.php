<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::orderby('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component');
    }
}
