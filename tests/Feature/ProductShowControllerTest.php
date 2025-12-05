<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('product show controller displays product by slug', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create([
        'slug' => 'test-product',
        'category_id' => $category->id,
    ]);

    $response = $this->get("/products/{$product->slug}");

    $response->assertStatus(200);
    $response->assertViewIs('products.show');
    $response->assertViewHas('product', function ($viewProduct) use ($product) {
        return $viewProduct->id === $product->id;
    });
});

test('product show controller returns 404 for non-existent product', function (): void {
    $response = $this->get('/products/non-existent-product-slug-12345');

    $response->assertNotFound();
});

test('product show controller passes correct product to view', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create([
        'name' => 'My Product',
        'slug' => 'my-product',
        'category_id' => $category->id,
    ]);

    $response = $this->get("/products/{$product->slug}");

    $response->assertViewHas('product');
    $viewProduct = $response->viewData('product');
    expect($viewProduct->name)->toBe('My Product');
    expect($viewProduct->slug)->toBe('my-product');
});
