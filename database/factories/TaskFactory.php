<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'due_date' => $this->faker->date,
            'status' => $this->faker->randomElement(['Not Started', 'In Progress', 'Completed']),
            'user_id' => $this->faker->randomElement([1, 2, 3, 4]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
