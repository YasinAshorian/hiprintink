<?php

use App\Livewire\Managers\Dashboard\Dashboard;
use App\Livewire\Website\Home\HomePage;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home-page');


Route::prefix('managers')->group(function () {

    Route::get('/', Dashboard::class)->name('managers.dashboard');


});
