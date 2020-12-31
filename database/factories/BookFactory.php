<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
            'link' => $this->faker->url,
            'featured' => $this->faker->boolean,
//            'category_id' => Category::factory()->create(),
        ];
    }
}
