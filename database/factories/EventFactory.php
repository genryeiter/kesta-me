<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'start_date' => Carbon::now()->addDays(1)->setHour(12)->setMinutes(0),
            'finish_date' => Carbon::now()->addDays(1)->setHour(18)->setMinutes(0),
            'location' => 'Tallinn',
            'focus_group' => $this->faker->word()
        ];
    }
}
