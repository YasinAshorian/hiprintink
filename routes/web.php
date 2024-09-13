<?php

use App\Livewire\Managers\Auth\Login;
use App\Livewire\Managers\Dashboard\Dashboard;
use App\Livewire\Managers\Products\ProductDetail;
use App\Livewire\Managers\Products\ProductGroup;
use App\Livewire\Managers\Products\ProductGroupItem;
use App\Livewire\Managers\Products\Products;
use App\Livewire\Managers\Users\Users;
use App\Livewire\Website\Home\HomePage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;


Route::get('/', HomePage::class)->name('home-page');
Route::get('/about-us', App\Livewire\Website\AboutUs\AboutUsPage::class)->name('about-us');
Route::get('/products', \App\Livewire\Website\Products\Products::class)->name('products');
Route::get('/product/detail/{product}', \App\Livewire\Website\Products\ProductDetail::class)->name('product-detail');



Route::prefix('managers/auth')->middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');

});

Route::prefix('managers')->middleware('auth:web')->group(function () {

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('managers.dashboard');
    })->name('logout');

    Route::get('/', Dashboard::class)->name('managers.dashboard');

    Route::get('/users', Users::class)->name('managers.users');

    Route::prefix('products')->group(function () {
        Route::get('/groups', ProductGroup::class)->name('managers.product-group');
        Route::get('/group/items/{productGroup}', ProductGroupItem::class)->name('managers.product-group-items');
        Route::get('/', Products::class)->name('managers.products');
        Route::get('/detail/{product}', ProductDetail::class)->name('managers.product-detail');
    });

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth:web']], function () {
    Lfm::routes();
});
