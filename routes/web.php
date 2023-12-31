<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::prefix('contact')->group(function(){
    Route::get('/', [PageController::class, 'contact'])->name('contact');
    Route::post('/', [MessagesController::class, 'send'])->name('contact.send');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('properties')->group(function(){
    Route::get('', [PropertyController::class, 'index'])->name('properties');
    Route::get('{property:slug}', [PropertyController::class, 'show'])->name('properties.show');
});

require __DIR__.'/auth.php';
