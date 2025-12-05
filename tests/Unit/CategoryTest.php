<?php

declare(strict_types=1);

use App\Enums\CategoryStatus;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('category has correct fillable attributes', function (): void {
    $category = Category::factory()->create([
        'name' => 'Test Category',
        'slug' => 'test-category',
        'status' => CategoryStatus::Active,
    ]);

    expect($category->name)->toBe('Test Category');
    expect($category->slug)->toBe('test-category');
    expect($category->status)->toBe(CategoryStatus::Active);
});

test('category casts status to CategoryStatus enum', function (): void {
    $category = Category::factory()->create([
        'status' => CategoryStatus::Active,
    ]);

    expect($category->status)->toBeInstanceOf(CategoryStatus::class);
    expect($category->status)->toBe(CategoryStatus::Active);
});

test('category has products relationship', function (): void {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    expect($category->products)->toHaveCount(1);
    expect($category->products->first()->id)->toBe($product->id);
});

test('category uses slug as route key', function (): void {
    $category = Category::factory()->create(['slug' => 'my-category']);

    expect($category->getRouteKeyName())->toBe('slug');
    expect($category->getRouteKey())->toBe('my-category');
});

test('category can have multiple products', function (): void {
    $category = Category::factory()->create();
    Product::factory()->count(3)->create(['category_id' => $category->id]);

    expect($category->products)->toHaveCount(3);
});
