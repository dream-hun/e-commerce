<?php

declare(strict_types=1);

use App\Enums\ProductStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('product has correct fillable attributes', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create([
        'name' => 'Test Product',
        'slug' => 'test-product',
        'status' => ProductStatus::Active,
        'category_id' => $category->id,
        'price' => 50000,
    ]);

    expect($product->name)->toBe('Test Product');
    expect($product->slug)->toBe('test-product');
    expect($product->status)->toBe(ProductStatus::Active);
    expect($product->price)->toBe(50000);
});

test('product casts status to ProductStatus enum', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create([
        'status' => ProductStatus::Active,
        'category_id' => $category->id,
    ]);

    expect($product->status)->toBeInstanceOf(ProductStatus::class);
    expect($product->status)->toBe(ProductStatus::Active);
});

test('product belongs to category', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    expect($product->category)->toBeInstanceOf(Category::class);
    expect($product->category->id)->toBe($category->id);
});

test('product uses slug as route key', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create([
        'slug' => 'my-product',
        'category_id' => $category->id,
    ]);

    expect($product->getRouteKeyName())->toBe('slug');
    expect($product->getRouteKey())->toBe('my-product');
});
