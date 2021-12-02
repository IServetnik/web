<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentsResource;
use App\Models\Comment;
use App\Models\Page;
use Auth;
use Illuminate\Support\Facades\Http;

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

    public function getAll()
    {
        $comments = Comment::with(['user', 'page', 'page.category'])->withCount(['likes', 'dislikes'])->latest()->get();
        return new CommentsResource($comments);
    }

    public function index()
    {
        $data = Http::get(route('api.comments'))->json()['data'];
        $count = $data['count'];
        $comments = (object) $data['comments'];

        return view('comments.index', compact('count', 'comments'));
    }
}
