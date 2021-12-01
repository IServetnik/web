<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'comment_id' => Comment::inRandomOrder()->first()->id,
            'type' => $this->faker->randomElement(['like', 'dislike']),
        ];
    }
}
