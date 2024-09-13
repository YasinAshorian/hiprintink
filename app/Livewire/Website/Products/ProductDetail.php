<?php

namespace App\Livewire\Website\Products;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;

    public function mount()
    {
        $this->product = Product::query()->where('name', "LIKE", $this->product)->first();
    }

    public function render()
    {
        return view('livewire.website.products.product-detail');
    }
}
