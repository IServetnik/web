<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Page;
use Auth;

class CommentController extends Controller
{
    public function store(Page $page, CommentRequest $request)
    {
        Comment::create([
            'user_id' => Auth::id(),
            'page_id' => $page->id,
            'text' => $request->text,
        ]);

        return back();
    }
}
