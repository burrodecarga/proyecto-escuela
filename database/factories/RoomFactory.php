<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sede;
use App\Models\Room;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $width = $this->faker->numberBetween(3, 5);
        $long = $this->faker->numberBetween(5, 10);
        $cap = round($width * $long * Room::CAPACITY);
        $sede = Sede::inRandomOrder()->first();

        return [
            'name' => $this->faker->numerify('aula-####'),
            'width' => $width,
            'sede_id' => $sede->id,
            'high' => $this->faker->numberBetween(2, 3),
            'long' => $long,
            'capacity' => $cap,
        ];
    }
}
