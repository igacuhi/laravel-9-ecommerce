<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $slides = HomeSlider::orderBy('created_at','DESC')->get();
        return view('livewire.admin.admin-home-slider-component',['slides' => $slides]);
    }
}
