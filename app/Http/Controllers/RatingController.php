<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function like(Comment $comment)
    {
        $userId = Auth::id();

        Rating::where('user_id', $userId)->where('comment_id', $comment->id)->delete();

        Rating::create([
            'user_id' => $userId,
            'comment_id' => $comment->id,
            'type' => 'like',
        ]);

        return redirect()->back();
    }

    public function dislike(Comment $comment)
    {
        $userId = Auth::id();
        Rating::where('user_id', $userId)->where('comment_id', $comment->id)->delete();

        Rating::create([
            'user_id' => $userId,
            'comment_id' => $comment->id,
            'type' => 'dislike',
        ]);

        return redirect()->back();
    }
}
