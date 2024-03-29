<?php

use App\Livewire\Admin\AdminAddCategoryComponent;
use App\Livewire\Admin\AdminEditCategoryComponent;
use App\Livewire\DetailsComponent;
use App\Livewire\User\UserDashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\CartComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ShopComponent;
use App\Livewire\HomeComponent;
use App\Livewire\Admin\AdminDashboard;
use App\Livewire\CategoryComponent;
use App\Livewire\SearchComponent;
use App\Livewire\WishlistComponent;
use App\Livewire\Admin\AdminCategoriesComponent;
use App\Livewire\Admin\AdminProductComponent;
use App\Livewire\Admin\AdminAddProductComponent;
use App\Livewire\Admin\AdminEditProductComponent;
use App\Livewire\Admin\AdminHomeSliderComponent;
use App\Livewire\Admin\AdminAddHomeSlideComponent;
use App\Livewire\Admin\AdminEditHomeSlideComponent;


    
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
 Route::get('/wishlist',WishlistComponent::class)->name('shop.wishlist');
 Route::get('/checkout',CheckoutComponent::class)->name('shop-checkout');
 Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
  Route::get('/shop/{product}', function ($product) {
     return view('livewire.shop-component', [
         'product' => $product
     ]);
 });
Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');


 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');
Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboard::class)->name('user.dashboard');
});
Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.category.add');
    Route::get('/admin/category/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.category.edit');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.home.slider');
    Route::get('/admin/slider/add',AdminAddHomeSlideComponent::class)->name('admin.home.slide.add');
    Route::get('/admin/slider/add/edit/{slide_id}',AdminEditHomeSlideComponent::class)->name('admin.home.slide.edit');

});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
