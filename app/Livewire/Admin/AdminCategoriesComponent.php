<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;


class AdminCategoriesComponent extends Component
{
    public $category_id;
    use WithPagination;

    public function deleteCategory(){
        $category = Category::find($this->category_id);
        if ($category) {
        $category->delete();
        Session()->flash('message','category deleted successfully!');
    }  
    else {
        Session()->flash('message', 'Category not found!');
    }
    }
    public function render()
    {
        
        $categories = Category::orderBy('name','ASC')->paginate(5);
        return view('livewire.admin.admin-categories-component',['categories'=>$categories]);
    }
}
