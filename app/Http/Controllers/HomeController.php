<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Enums\CategoryStatus;
use App\Enums\ProductStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): Factory|View
    {
        $categories = Category::query()->where('status', CategoryStatus::Active)->latest()
            ->take(6)
            ->get();

        $products = Product::query()->where('status', ProductStatus::Active)->latest()
            ->take(6)
            ->get();

        return view('welcome', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
