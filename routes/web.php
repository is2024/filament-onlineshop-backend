<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\StoreShow;
use App\Livewire\ProductDetail;
use App\Livewire\ShoppingCart;
use App\Livewire\Order;
use App\Livewire\OrderDetail;


Route::get('/', StoreShow::class)->name('home');
Route::get('/product', ProductDetail::class)->name('product.detail');
Route::get('/shopping-cart', ShoppingCart::class)->name('shopping-cart');
Route::get('/orders', Order::class)->name('orders');
Route::get('/order-detail', OrderDetail::class)->name('order-detail');
