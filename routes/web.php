<?php

use App\Livewire\Website\Home\HomePage;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home-page');
