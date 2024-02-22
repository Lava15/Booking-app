<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $name = fake()->firstName(),
            'slug' => str()->slug($name),
            'profile_photo_url' => fake()->imageUrl(),
        ];
    }
}
