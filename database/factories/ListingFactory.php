<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()?->id,
            'subcategory_id' => SubCategory::inRandomOrder()->first()?->id,
            'title' => $this->faker->sentence(4),
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'description' => $this->faker->paragraph,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'location_name' => $this->faker->address,
            'reference_number' => $this->faker->unique()->bothify('REF-####'),
            'status' => $this->faker->randomElement(['active', 'inactive', 'approved', 'rejected', 'pending']),
            'agree_to_terms_and_conditions' => 1,
            'hide_phone' => $this->faker->boolean(20),
            'is_featured' => $this->faker->boolean(10),
            'is_verified' => $this->faker->boolean(50),
            'is_premium' => $this->faker->boolean(5),
            'is_popular' => $this->faker->boolean(5),
            'country_id' => Country::inRandomOrder()->first()?->id ?? 1,
            'city_id' => 1,
            'created_by' => User::inRandomOrder()->first()?->id ?? User::factory(),
        ];
    }
}
