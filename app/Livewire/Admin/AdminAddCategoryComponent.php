<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\support\Str;
use Illuminate\Support\Facades\Session;


class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }
    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required'
        ]);
    }

    public function storeCategory(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);
        $category = new category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        Session()->flash('message','category has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-category-component');
    }
}
