<?php

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PairsFactory extends Factory
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
            "currency_to_id"=>$this->faker->randomElement(Currency::all()),
            "currency_from_id"=>$this->faker->randomElement(Currency::all()),
            "rate"=>$this->faker->randomFloat(2,0,300),
        ];
    }
}
