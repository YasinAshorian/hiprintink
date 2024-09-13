<?php

namespace App\Livewire\Managers\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public function delete($id)
    {
        Product::query()->where('id', $id)->delete();
        return back();
    }

    public function render()
    {
        $products = Product::query()->orderByDesc('id')->paginate(15);

        return view('livewire.managers.products.products', ['products' => $products])->layout('livewire.layouts.managers');
    }
}
