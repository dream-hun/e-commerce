<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class ProductShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product): Factory|View
    {
        return view('products.show', ['product' => $product]);
    }
}
