<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'description' => fake()->paragraph(),
            'duration' => fake()->numberBetween(4, 24),
            'fee' => fake()->randomFloat(2, 150, 2500),
            'difficulty' => fake()->randomElement(['Easy', 'Medium', 'Hard']),
            'is_active' => true,
        ];
    }
}
