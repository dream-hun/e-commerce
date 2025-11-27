<?php

declare(strict_types=1);

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (): Factory|View => view('welcome'));
Route::get('/product-details', fn (): Factory|View => view('product'));
Route::get('/shop', fn (): Factory|View => view('shop'));
Route::get('/shopping-cart/checkout', fn (): Factory|View => view('checkout'));
Route::get('/shop/shopping-cart', fn (): Factory|View => view('cart'));
Route::get('/account/orders', fn (): Factory|View => view('account.orders.index'));
Route::get('/account/orders/order', fn (): Factory|View => view('account.orders.order'));
