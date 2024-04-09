<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'species' => $this->faker->randomElement(['Dog', 'Cat', 'Bird', 'Other']),
            'breed' => $this->faker->word,
            'owner_name' => $this->faker->name,
            'birth_date' => $this->faker->date('Y-m-d', $this->faker->year('-10')),
            'gender' => $this->faker->randomElement(['male', 'male', 'unknown']),
            'sterilized' => $this->faker->boolean,
            'description' => $this->faker->paragraph(2),
        ];
    }
}
