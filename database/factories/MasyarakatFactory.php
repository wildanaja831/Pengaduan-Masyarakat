<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Masyarakat>
 */
class MasyarakatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name,
            'username' => $this->faker->unique()->userName,
            'password' => Hash::make('masyarakat123'),
            'telp' => $this->faker->phoneNumber,
            'nik' => $this->faker->numerify('#######'),
        ];
    }
}