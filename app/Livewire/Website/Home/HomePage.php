<?php

namespace App\Livewire\Website\Home;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Slider;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        $blogs = Blog::query()->latest()->get();
        $sliders = Slider::query()->latest()->get();
        $bestProducts = Product::query()->where('top_products', true)->latest()->take(8)->get();

        return view('livewire.website.home.home-page', ['blogs' => $blogs, 'sliders' => $sliders, 'bestProducts' => $bestProducts]);
    }
}
