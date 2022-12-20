<?php

namespace Database\Factories\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone_number' => fake()->unique()->phoneNumber(),
            'name' => fake()->name(),
            'information' => fake()->sentence(),
            'remember_token' => Str::random(10),
        ];
    }
}
