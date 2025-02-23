<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('store');
});

Route::get('/', [App\Http\Controllers\StoreController::class, 'index'])->name('store');
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/checkout2', function () {
    return view('checkout2');
});

Route::get('/checkout3', function () {
    return view('checkout3');
});

Route::get('/checkout4', function () {
    return view('checkout4');
});

Route::get('/checkout5', function () {
    return view('checkout5');
});

Route::get('/checkout6', function () {
    return view('checkout6');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/pay/{grossamount}', [App\Http\Controllers\CheckoutController::class, 'pay'])->name('pay');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', ProductController::class);
Route::resource('checkout', CheckoutController::class);

Route::get('add/{product}/cart', [CartController::class, 'addToCart'])->name('add.cart');
Route::get('cart', [CartController::class, 'cartItems'])->name('cart.index');
Route::get('increment/{product}', [CartController::class, 'incrementQ'])->name('quantity.inc');
Route::get('decrement/{product}', [CartController::class, 'decrementQ'])->name('quantity.dec');
Route::get('remove/{product}', [CartController::class, 'removeFromCart'])->name('remove.cart');

Route::get('/search', [StoreController::class, 'search'])->name('products.search');