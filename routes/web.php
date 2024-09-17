<?php

use App\Livewire\Crm\Calendar;
use App\Livewire\Crm\CustomerForm;
use App\Livewire\Crm\CustomerShow;
use App\Livewire\Crm\LeadForm;
use App\Livewire\Crm\LeadShow;
use App\Livewire\Crm\OrderForm;
use App\Livewire\Crm\OrderShow;
use App\Livewire\Crm\ProductForm;
use App\Livewire\Crm\ProductShow;
use App\Livewire\Crm\QuotationForm;
use App\Livewire\Crm\QuotationShow;
use App\Livewire\Crm\SettingForm;
use App\Livewire\Crm\UsersForm;
use App\Livewire\Crm\UsersShow;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::redirect('/', 'lead');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {

    Route::get('/calendar',Calendar::class);
    Route::get('/setting', SettingForm::class);
    
    Route::get('/lead', LeadShow::class);
    Route::get('/lead-form', LeadForm::class);

    Route::get('/order', OrderShow::class);
    Route::get('/order-form', OrderForm::class);

    Route::get("/customer", CustomerShow::class);
    Route::get('/customer-form', CustomerForm::class);

    Route::get('/quotation', QuotationShow::class);
    Route::get('/quotation-form', QuotationForm::class);

    Route::get('/product', ProductShow::class);
    Route::get('/product-form', ProductForm::class);

    Route::get('/users', UsersShow::class);
    Route::get('/users-form', UsersForm::class);

    
});

require __DIR__ . '/auth.php';
