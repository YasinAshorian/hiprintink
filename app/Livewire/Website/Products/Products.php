<?php

namespace App\Livewire\Website\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::query()->where('status', Product::STATUS_ACTIVE)
            ->when(request()->filled('group_item'), function ($q) {
                $q->where('product_group_item_id', request()->input('group_item'));
            })->orderByDesc('id')->paginate(15);

        return view('livewire.website.products.products', ['products' => $products]);
    }
}
