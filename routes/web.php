<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ShopComponent;
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

//Route::view('/', 'welcome');
 Route::get('/',HomeComponent::class)->name('home.index');
 Route::get('/shop',ShopComponent::class)->name('shop');
 Route::get('/cart',CartComponent::class)->name('shop-cart');
 Route::get('/checkout',CheckoutComponent::class)->name('shop-checkout');
 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
