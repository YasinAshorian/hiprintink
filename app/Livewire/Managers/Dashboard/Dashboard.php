<?php

namespace App\Livewire\Managers\Dashboard;


use App\Models\Blog;
use App\Models\ContactUs;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $blogs = Blog::query()->count();
        $contactUs = ContactUs::query()->count();
        $products = Product::query()->where('status', Product::STATUS_ACTIVE)->count();
        $users = User::query()->count();

        return view('livewire.managers.dashboard.dashboard', [
            'blogs' => $blogs,
            'products' => $products,
            'users' => $users,
            'contactUs' => $contactUs
        ])->layout('livewire.layouts.managers');
    }
}
