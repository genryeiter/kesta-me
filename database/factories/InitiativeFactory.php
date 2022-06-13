<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Initiative>
 */
class InitiativeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'user_id' =>  User::factory(),
            'description' => $this->faker->paragraph(),
            'level_of_impact' => 1,
            'active' => true,
            'status' => 'ok'
        ];
    }
}
