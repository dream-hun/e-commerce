<?php

declare(strict_types=1);

use App\Http\Controllers\CategoryShowController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductShowController;
use App\Http\Controllers\Settings\PasswordController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/products/{product:slug}', ProductShowController::class)->name('products.show');
Route::get('/categories/{category:slug}', CategoryShowController::class)->name('categories.show');
Route::get('/shop', fn (): Factory|View => view('shop'))->name('shop');
Route::get('/shopping-cart/checkout', fn (): Factory|View => view('checkout'))->name('checkout');
Route::get('/shop/shopping-cart', fn (): Factory|View => view('cart'))->name('cart');
Route::get('/account/orders', fn (): Factory|View => view('account.orders.index'))->name('account.orders.index');
Route::get('/account/orders/order', fn (): Factory|View => view('account.orders.order'))->name('account.orders.order');

Route::middleware('auth')->group(function (): void {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    // Settings
    Route::prefix('settings')->name('settings.')->group(function (): void {
        Route::get('/password', [PasswordController::class, 'edit'])->name('password.edit');
        Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
    });
});
