<?php

declare(strict_types=1);

use App\Enums\CategoryStatus;

test('category status enum has active and inactive cases', function (): void {
    expect(CategoryStatus::Active)->toBeInstanceOf(CategoryStatus::class);
    expect(CategoryStatus::Inactive)->toBeInstanceOf(CategoryStatus::class);
});

test('category status active returns correct label', function (): void {
    expect(CategoryStatus::Active->label())->toBe('Active');
});

test('category status inactive returns correct label', function (): void {
    expect(CategoryStatus::Inactive->label())->toBe('Inactive');
});

test('category status active returns correct color', function (): void {
    expect(CategoryStatus::Active->color())->toBe('bg-green-500');
});

test('category status inactive returns correct color', function (): void {
    expect(CategoryStatus::Inactive->color())->toBe('bg-red-500');
});

test('category status active returns correct icon', function (): void {
    $icon = CategoryStatus::Active->icon();
    expect($icon)->toBeString();
    expect($icon)->toContain('<svg');
});

test('category status inactive returns correct icon', function (): void {
    $icon = CategoryStatus::Inactive->icon();
    expect($icon)->toBeString();
    expect($icon)->toContain('<svg');
});

test('category status enum values are correct', function (): void {
    expect(CategoryStatus::Active->value)->toBe('active');
    expect(CategoryStatus::Inactive->value)->toBe('inactive');
});
