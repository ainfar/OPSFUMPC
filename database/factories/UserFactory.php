<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'matricID' => fake()->matricID(),
            'phoneNum' => fake()->phoneNum(),
            'accountType' => fake()->accountType(),
            'gender' => fake()->gender(),
            'location' => fake()->location(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
            'phoneNum_verified_at' => null,
            'name_verified_at' => null,
            'gender_verified_at' => null,
            'accountType_verified_at' => null,
            'location_verified_at' => null,
            'matricID_verified_at' => null,
        ]);
    }
}
