<?php

namespace Database\Factories;

use App\Models\DiaryNote;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiaryNoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiaryNote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'context' => $this->faker->word,
            'accent' => $this->faker->country,
            'english' => $this->faker->sentence,
            'indonesia' => $this->faker->sentence
        ];
    }
}
