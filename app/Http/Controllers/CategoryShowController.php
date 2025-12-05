<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class CategoryShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category): Factory|View
    {
        $products = $category->products;

        return view('categories.show', compact('category', 'products'));
    }
}
