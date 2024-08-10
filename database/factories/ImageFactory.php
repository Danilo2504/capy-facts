<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "image_url" => $this->faker->imageUrl(640, 480, 'animals'),
            "description" => $this->faker->text(100),
            "width" => 640,
            "height" => 480
        ];
    }
}
