<?php

use App\Livewire\Crm\CustomerForm;
use App\Livewire\Crm\CustomerShow;
use App\Livewire\Crm\LeadForm;
use App\Livewire\Crm\LeadShow;
use App\Livewire\Crm\OrderForm;
use App\Livewire\Crm\OrderShow;
use App\Livewire\Crm\QuotationForm;
use App\Livewire\Crm\QuotationShow;
use App\Livewire\Crm\SettingForm;
use App\Livewire\Customer;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::redirect('/', 'customer');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {

    // Route::get('/test',Test::class);
    // Route::get('/customer',Customer::class);

    Route::get('/lead', LeadShow::class);
    Route::get('/lead-form', LeadForm::class);

    Route::get('/order', OrderShow::class);
    Route::get('/order-form', OrderForm::class);

    Route::get("/customer", CustomerShow::class);
    Route::get('/customer-form', CustomerForm::class);

    Route::get('/quotation', QuotationShow::class);
    Route::get('/quotation-form', QuotationForm::class);

    Route::get('/setting', SettingForm::class);
    
});

require __DIR__ . '/auth.php';
