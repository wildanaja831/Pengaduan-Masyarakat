<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
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
            'nama' => $this->faker->name(),
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('user123'),
            'telp' => $this->faker->phoneNumber,
            'role' => $this->faker->randomElement(['admin', 'petugas']),
            'remember_token' => Str::random(10),
        ];
    }
}