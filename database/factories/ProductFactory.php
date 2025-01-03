<?php

declare(strict_types=1);


namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imagePath = $this->faker->image(Storage::disk('public')->path('images/products'), 640, 480, null, false);

        return [
            'category_id' => ProductCategory::all()->random()->id,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => 'images/products/' . $imagePath,
            'price' => $this->faker->randomFloat(2, 10, 15000),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'deleted_at' => null,
        ];
    }
}
