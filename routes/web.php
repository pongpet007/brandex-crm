<?php

use App\Http\Controllers\PDFController;
use App\Livewire\Crm\Calendar;
use App\Livewire\Crm\ChangePasswordForm;
use App\Livewire\Crm\Components\LeadInvoiceCreateModal;
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

    Route::get('/calendar', Calendar::class);
    Route::get('/setting', SettingForm::class);
    Route::get('/change-password', ChangePasswordForm::class);

    Route::get('/lead', LeadShow::class)->name('lead');
    Route::get('/lead-form/{leads_id}', LeadForm::class);

    Route::get('/order', OrderShow::class);
    Route::get('/order-form', OrderForm::class);

    Route::get("/customer", CustomerShow::class);
    Route::get('/customer-form/{cus_id}', CustomerForm::class);

    Route::get('/quotation', QuotationShow::class);
    Route::get('/quotation-form', QuotationForm::class);

    Route::get('/product', ProductShow::class);
    Route::get('/product-form/{pro_id}', ProductForm::class);

    Route::get('/users', UsersShow::class);
    Route::get('/users-form/{id}', UsersForm::class);
    
    // PDF
    Route::get('/pdf',[PDFController::class,'pdf']);
    Route::get('/quotationPdf/{quote_id}',[PDFController::class,'quotationPdf']);
    Route::get('/invoicePdf/{invoice_id}',[PDFController::class,'invoicePdf']);
    
});

require __DIR__ . '/auth.php';
