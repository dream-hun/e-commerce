<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ProductStatus;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
final class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();

        return [
            'uuid' => Str::uuid(),
            'name' => $name,
            'slug' => Str::slug($name),
            'featured_image' => fake()->imageUrl(600, 600, 'products', true, 'products'),
            'description' => fake()->paragraph(),
            'status' => ProductStatus::Active->value,
            'category_id' => Category::inRandomOrder()->first()->id,
            'price' => fake()->numberBetween(10000, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
