<?php

declare(strict_types=1);

use App\Enums\ProductStatus;

test('product status enum has active and inactive cases', function (): void {
    expect(ProductStatus::Active)->toBeInstanceOf(ProductStatus::class);
    expect(ProductStatus::Inactive)->toBeInstanceOf(ProductStatus::class);
});

test('product status active returns correct label', function (): void {
    expect(ProductStatus::Active->label())->toBe('Active');
});

test('product status inactive returns correct label', function (): void {
    expect(ProductStatus::Inactive->label())->toBe('Inactive');
});

test('product status active returns correct color', function (): void {
    expect(ProductStatus::Active->color())->toBe('bg-green-500');
});

test('product status inactive returns correct color', function (): void {
    expect(ProductStatus::Inactive->color())->toBe('bg-red-500');
});

test('product status active returns correct icon', function (): void {
    $icon = ProductStatus::Active->icon();
    expect($icon)->toBeString();
    expect($icon)->toContain('<svg');
});

test('product status inactive returns correct icon', function (): void {
    $icon = ProductStatus::Inactive->icon();
    expect($icon)->toBeString();
    expect($icon)->toContain('<svg');
});

test('product status enum values are correct', function (): void {
    expect(ProductStatus::Active->value)->toBe('active');
    expect(ProductStatus::Inactive->value)->toBe('inactive');
});
