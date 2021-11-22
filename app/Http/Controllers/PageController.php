<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageCategory;

class PageController extends Controller
{
    public function index(PageCategory $pageCategory, Page $page)
    {
        return view("{$pageCategory->name}.{$page->name}", compact('pageCategory', 'page'));
    }
}
