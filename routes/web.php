<?php


use App\Livewire\Managers\Auth\Login;
use App\Livewire\Managers\Blogs\Blogs\BlogCreate;
use App\Livewire\Managers\Blogs\Blogs\Blogs;
use App\Livewire\Managers\Blogs\Blogs\BlogUpdate;
use App\Livewire\Managers\Blogs\Topics\Topics;
use App\Livewire\Managers\ContactUs\ContactDetail;
use App\Livewire\Managers\ContactUs\ContactUs;
use App\Livewire\Managers\Dashboard\Dashboard;
use App\Livewire\Managers\Products\ProductDetail;
use App\Livewire\Managers\Products\ProductGroup;
use App\Livewire\Managers\Products\ProductGroupItem;
use App\Livewire\Managers\Products\Products;
use App\Livewire\Managers\Sliders\Sliders;
use App\Livewire\Managers\Users\Users;
use App\Livewire\Website\Blogs\BlogDetail;
use App\Livewire\Website\Home\HomePage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;


Route::get('migrate', function () {
   \Illuminate\Support\Facades\Artisan::call("migrate");
   return "success !";
});

Route::get('exchange', function () {
   \Illuminate\Support\Facades\Artisan::call('app:exchange');
});

Route::get('/', HomePage::class)->name('home-page');
Route::get('/about-us', App\Livewire\Website\AboutUs\AboutUsPage::class)->name('about-us');
Route::get('/products', \App\Livewire\Website\Products\Products::class)->name('products');
Route::get('/product/detail/{product}', \App\Livewire\Website\Products\ProductDetail::class)->name('product-detail');
Route::get('/contact-us', \App\Livewire\Website\ContactUs\ContactUs::class)->name('contact-us');
Route::get('/blogs', \App\Livewire\Website\Blogs\Blogs::class)->name('blogs');
Route::get('blog/detail/{blog}', BlogDetail::class)->name('blog-detail');

Route::prefix('managers/auth')->middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');

});

Route::prefix('managers')->middleware('auth:web')->group(function () {

    Route::get('/logout', function () {
        Auth::logout();
        return redirect()->route('managers.dashboard');
    })->name('logout');

    Route::get('/', Dashboard::class)->name('managers.dashboard');

    /** sliders */
    Route::get('/sliders', Sliders::class)->name('managers.sliders');

    Route::get('/users', Users::class)->name('managers.users');

    Route::prefix('products')->group(function () {
        Route::get('/groups', ProductGroup::class)->name('managers.product-group');
        Route::get('/group/items/{productGroup}', ProductGroupItem::class)->name('managers.product-group-items');
        Route::get('/', Products::class)->name('managers.products');
        Route::get('/detail/{product}', ProductDetail::class)->name('managers.product-detail');
    });

    /** blogs  */
    Route::prefix('blogs')->group(function () {
        Route::get('/', Blogs::class)->name('manager.blogs');
        Route::get('/create', BlogCreate::class)->name('manager.blog-create');
        Route::get('/update/{blog}', BlogUpdate::class)->name('manager.blog-update');
    });

    /** blog topics */
    Route::get('/topic', Topics::class)->name('manager.topics');


    /** contact us  */
    Route::get('/contact', ContactUs::class)->name('manager.contact-us');
    Route::get('/contact-us/{contactUs}', ContactDetail::class)->name('manager.contact-detail');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth:web']], function () {
    Lfm::routes();
});
