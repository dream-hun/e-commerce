<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;

final class ProductShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        return view('products.show', compact('product'));
    }
}
