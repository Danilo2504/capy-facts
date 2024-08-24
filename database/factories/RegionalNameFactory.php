<?php

namespace Database\Factories;

use App\Models\GeneralInformation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RegionalName>
 */
class RegionalNameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'general_information_id' => 1,
            "name" => $this->faker->text(50),
            'language' => $this->faker->languageCode(),
            'country' => $this->faker->countryCode(),
        ];
    }
}
