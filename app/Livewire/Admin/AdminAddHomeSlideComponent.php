<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminAddHomeSlideComponent extends Component
{
    public $top_title;
    public $title;
    public $sub_title;
    public $offer;
    public $link;
    public $status;
    public $image;

    public function addSlide()
    {
        $this->validate ([
           'top_title' =>'required',
            'title' =>'required',
            'sub_title' =>'required',
            'offer' =>'required', 
            'link' =>'required',
            'status' =>'required',
            'image'  =>'required',
        ]);
    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slide-component');
    }
}
