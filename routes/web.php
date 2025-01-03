<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\StoreShow;
use App\Livewire\ProductDetail;
use App\Livewire\ShoppingCart;
use App\Livewire\Order;
use App\Livewire\OrderDetail;
use App\Livewire\Checkout;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\PaymentConfirmation;
use App\Livewire\Profile;


Route::get('/', StoreShow::class)->name('home');
Route::get('/product', ProductDetail::class)->name('product.detail');
Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');
Route::get('/orders', Order::class)->name('orders');
Route::get('/order-detail', OrderDetail::class)->name('order-detail');
Route::get('/checkout', Checkout::class)->name('checkout');

Route::get('/payment-confirmation', PaymentConfirmation::class)->name('payment-confirmation');
Route::get('/profile', Profile::class)->name('profile');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});
