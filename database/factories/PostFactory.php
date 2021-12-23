<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>$this->faker->sentence(3),
            'content' =>$this->faker->paragraphs(10,true),
            'lead' => $this->faker->text(200),
            'author_id' => rand(1,20),
            'topic_id' => rand(1,3),



        ];
    }
}
