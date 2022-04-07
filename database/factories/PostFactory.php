<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text(50);
        return [
            'title' => $title,
            'url' => Str::slug($title),
            'summary' => $this->faker->text(200),
            'content' => $this->faker->text(4000),
            'meta_title' => $title,
            'meta_keywords' => $this->faker->text(200),
            'meta_description' => $this->faker->text(200),
            'author_id' => rand(1,3),
            'category_id' => rand(1,4)
        ];
    }
}
