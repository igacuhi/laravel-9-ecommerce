<?php

use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomeComponent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/cart',CartComponent::class)->name('shop-cart');
Route::get('/checkout',CheckoutComponent::class)->name('shop-checkout');