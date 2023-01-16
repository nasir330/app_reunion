<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TshirtController;
use App\Http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('user-list',[UserController::class,'index'])->name('user-list');

//profile
Route::get('user-profile',[ProfileController::class,'index'])->name('user-profile');
Route::post('profile-info-submit',[ProfileController::class,'store'])->name('profile-info-submit');

//package
Route::get('package',[PackageController::class,'index'])->name('package');
Route::post('submit-participant',[PackageController::class,'submitParticipant'])->name('submit-participant');
Route::get('package-edit/{id}',[PackageController::class,'packageEdit'])->name('package-edit');
Route::get('fetch-package',[PackageController::class,'fetchPackage'])->name('fetch-package');
Route::get('package-delete/{id}',[PackageController::class,'packageDelete'])->name('package-delete');

//payment start
Route::get('payment',[PaymentController::class,'index'])->name('payment');
Route::get('payment-checkout',[PaymentController::class,'paymentCheckout'])->name('payment-checkout');
Route::post('payment-confirm',[PaymentController::class,'paymentConfirm'])->name('payment-confirm');
Route::get('payment-list',[PaymentController::class,'paymentList'])->name('payment-list');
Route::get('payment-details/{id}',[PaymentController::class,'paymentDetails'])->name('payment-details');


//invoice start
Route::get('invoice-list',[InvoiceController::class,'index'])->name('invoices-list');
Route::get('invoice-view',[InvoiceController::class,'view'])->name('invoices-view');

Route::get('pdf',[InvoiceController::class,'pdf'])->name('pdf');

Route::get('invoice-header', function () {
    return view('templates.Invoice.set-header');
})->name('invoices-set-header');
Route::post('submit-invoice-header',[InvoiceController::class,'setHeader'])->name('submit-invoice-header');


//Route::get('invoice-create',[CollectionController::class,'index'])->name('invoice-create');
Route::get('new-invoice',[InvoiceController::class,'create'])->name('new-invoice');
Route::post('new-invoice',[InvoiceController::class,'invoiceCreate'])->name('invoice-create');
Route::get('invoice-step2',[InvoiceController::class,'invoiceStep2'])->name('invoice-step2');

Route::get('fetch-rooms',[CollectionController::class,'fetchRooms']);

Route::get('test',[CollectionController::class,'test'])->name('test');

//tshirt start
Route::get('tshirt-list',[TshirtController::class,'index'])->name('tshirt-list');
Route::post('tshirt-submit',[TshirtController::class,'store'])->name('tshirt-submit');
Route::get('tshirt-edit/{id}',[TshirtController::class,'edit'])->name('tshirt-edit');
Route::get('fetch-tshirts',[TshirtController::class,'fetchTshirts']);
Route::get('fetch-tshirts/{id}',[TshirtController::class,'fetchTshirtsData']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});