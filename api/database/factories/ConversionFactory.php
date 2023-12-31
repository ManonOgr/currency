<?php

namespace Database\Factories;

use App\Models\Pairs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConversionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "count"=>0,
            "pairs_id"=>$this->faker->randomElement(Pairs::all())
        ];
    }
}
