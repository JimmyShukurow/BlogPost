<?php

namespace Database\Factories;

use App\Models\CommentModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentModelFactory extends Factory
{
   protected $model = CommentModel::class;

    public function definition()
    {
        return [
            'author' => $this->faker->name(),
            'content' => $this->faker->paragraph(2),
        ];
    }
}
