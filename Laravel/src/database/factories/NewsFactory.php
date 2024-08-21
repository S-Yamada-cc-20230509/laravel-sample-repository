<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;

class NewsFactory extends Factory
{
    protected $model = News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date(),
            'title' => $this->faker->sentence(),
            'explanation' => $this->faker->paragraph(),
            'image_path' => $this->faker->imageUrl(), 
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
