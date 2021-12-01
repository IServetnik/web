<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class Comments extends Component
{
    public $page;
    public $comments;

    public function __construct(Page $page)
    {
        $this->page = $page;
        $this->comments = $page->comments()
            ->with('user')->withCount(['likes', 'dislikes'])
            ->latest()
            ->get();
    }


    public function render()
    {
        return view('components.comments');
    }
}
