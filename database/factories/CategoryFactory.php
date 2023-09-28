<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_type' => rand(1,2),
            'category_name' => [ 'en' => $this->faker->name(), 'fr' => 'French '.$this->faker->name(), 'es' => 'Spanish '.$this->faker->name()],
            'sort_desc' => [ 'en' => $this->faker->sentence(), 'fr' => 'French '.$this->faker->sentence(), 'es' => 'Spanish '.$this->faker->sentence()],
            'questions' => [ 'en' => $this->faker->sentence(), 'fr' => 'French '.$this->faker->sentence(), 'es' => 'Spanish '.$this->faker->sentence()],
            'prompt' => [ 'en' => $this->faker->sentence(),    'fr' => 'French '.$this->faker->sentence(), 'es' => 'Spanish '.$this->faker->sentence()],
        ];
    }
}
