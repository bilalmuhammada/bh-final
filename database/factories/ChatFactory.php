<?php

namespace Database\Factories;

use App\Models\Chat;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChatFactory extends Factory
{
    protected $model = Chat::class;

    public function definition()
    {
        $first_user = User::inRandomOrder()->first() ?? User::factory()->create();
        $second_user = User::where('id', '!=', $first_user->id)->inRandomOrder()->first() ?? User::factory()->create();
        $listing = Listing::inRandomOrder()->first() ?? Listing::factory()->create();

        return [
            'title' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement(['requested', 'accepted', 'rejected']),
            'first_user_id' => $first_user->id,
            'second_user_id' => $second_user->id,
            'initiated_by' => $first_user->id,
            'ad_id' => $listing->id,
            'is_favorite' => $this->faker->boolean(20),
            'is_blocked' => $this->faker->boolean(10),
        ];
    }
}
