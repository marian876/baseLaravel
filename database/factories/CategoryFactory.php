<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition()
    {
        $name=$this->faker->unique()->word(5);

        return [
            'name' => $name,
            'slug'=>Str::slug($name)
        ];
    }
}
