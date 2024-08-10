<?php

namespace Database\Factories;

use App\Models\Fact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Source>
 */
class SourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fact_id' => Fact::factory(),
            'source_link' => $this->faker->url('http')
        ];
    }
}
