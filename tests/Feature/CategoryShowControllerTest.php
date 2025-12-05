<?php

declare(strict_types=1);

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('category show controller displays category with products', function (): void {
    $category = Category::factory()->create(['slug' => 'test-category']);
    $product = Product::factory()->create(['category_id' => $category->id]);

    $response = $this->get("/categories/{$category->slug}");

    $response->assertStatus(200);
    $response->assertViewIs('categories.show');
    $response->assertViewHas('category', function ($viewCategory) use ($category) {
        return $viewCategory->id === $category->id;
    });
    $response->assertViewHas('products');
});

test('category show controller passes products to view', function (): void {
    $category = Category::factory()->create(['slug' => 'my-category']);
    Product::factory()->count(3)->create(['category_id' => $category->id]);

    $response = $this->get("/categories/{$category->slug}");

    $response->assertViewHas('products');
    $products = $response->viewData('products');
    expect($products)->toHaveCount(3);
});

test('category show controller returns 404 for non-existent category', function (): void {
    $response = $this->get('/categories/non-existent-category');

    $response->assertNotFound();
});
