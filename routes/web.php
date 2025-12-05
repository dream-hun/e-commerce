<?php

declare(strict_types=1);

use App\Http\Controllers\CategoryShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductShowController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/products/{product:slug}', ProductShowController::class)->name('products.show');
Route::get('/categories/{category:slug}', CategoryShowController::class)->name('categories.show');
Route::get('/shop', fn (): Factory|View => view('shop'));
Route::get('/shopping-cart/checkout', fn (): Factory|View => view('checkout'));
Route::get('/shop/shopping-cart', fn (): Factory|View => view('cart'));
Route::get('/account/orders', fn (): Factory|View => view('account.orders.index'));
Route::get('/account/orders/order', fn (): Factory|View => view('account.orders.order'));
