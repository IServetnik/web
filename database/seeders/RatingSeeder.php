<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {
            $comments = Comment::inRandomOrder()->take(15)->get();

            foreach ($comments as $comment) {
                Rating::factory()->create([
                    'user_id' => $user->id,
                    'comment_id' => $comment->id,
                ]);
            }
        }
    }
}
