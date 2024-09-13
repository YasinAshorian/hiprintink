<?php

namespace App\Livewire\Components\Nav;

use App\Models\ProductGroup;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        $productGroups = ProductGroup::query()->where('status', ProductGroup::STATUS_ACTIVE)->get();

        return view('livewire.components.nav.navbar', ['productGroups' => $productGroups]);
    }
}
