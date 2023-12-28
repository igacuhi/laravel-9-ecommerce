<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use Livewire\Livewire;


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

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('/', function () {
    return view('home'); // assuming 'home' is your Livewire component view file
})->name('home.index');

Livewire::component('home', HomeComponent::class);