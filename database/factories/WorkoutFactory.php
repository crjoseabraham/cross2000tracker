<?php

namespace Database\Factories;

use App\Models\Athlete;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workout>
 */
class WorkoutFactory extends Factory
{
    protected $model = Workout::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->dateTimeBetween('-2 days', 'now'),
            'athlete_id' => Athlete::all()->random()->id,
            'wod1' => $this->faker->numberBetween(0, 25),
            'wod2' => $this->faker->numberBetween(0, 25),
            'wod3' => $this->faker->numberBetween(0, 25),
            'wod4' => $this->faker->numberBetween(0, 25),
            'total' => $this->faker->numberBetween(0, 100)
        ];
    }
}
