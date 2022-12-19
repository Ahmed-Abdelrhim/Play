<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => $this->faker->numberBetween(11,15),
            'title' => $this->faker->name(),
            'content' => $this->faker->text(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
