<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider; 
require_once app_path('Models/HomeSlider.php'); // Temporary solution


class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $slides = HomeSlider::orderBy('created_at', 'DESC')->get(); // Fetch slides
        return view('livewire.admin.admin-home-slider-component',['slides' => $slides]);
    }
}
