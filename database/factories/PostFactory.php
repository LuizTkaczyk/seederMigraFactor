<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);
        return [
           'title' => $title,
           'slug' => Str::slug($title),
           'subtitle' => $this->faker->sentence(10),
           'description' => $this->faker->paragraph(5),
           'publish_at' =>$this->faker->dateTime(),
           
        ];
    }
}
