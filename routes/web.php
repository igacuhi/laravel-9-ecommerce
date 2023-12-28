<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;


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
Route::get('/',App\Http\Livewire\HomeComponent::class)->name('home.index');

