<?php

use App\Livewire\Customer;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::redirect('/','customer');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/test',Test::class);
    Route::get('/customer',Customer::class);
});

require __DIR__ . '/auth.php';
