<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('store');
});

Route::get('/', [App\Http\Controllers\StoreController::class, 'index'])->name('store');
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history');
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/pay/{grossamount}', [App\Http\Controllers\CheckoutController::class, 'pay'])->name('pay');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);
Route::resource('checkout', CheckoutController::class);
Route::resource('histories', HistoryController::class);

Route::get('add/{product}/cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::get('cart', [CartController::class, 'cartItems'])->name('cart.index');
Route::get('increment/{product}', [CartController::class, 'incrementQ'])->name('quantity.inc');
Route::get('decrement/{product}', [CartController::class, 'decrementQ'])->name('quantity.dec');
Route::get('remove/{product}', [CartController::class, 'removeFromCart'])->name('remove.cart');


Route::get('/search', [StoreController::class, 'search'])->name('products.search');