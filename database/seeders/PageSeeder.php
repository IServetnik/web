<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageCategory;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run()
    {
        $football = PageCategory::where('name', 'football')->firstOrFail();
        Page::create(['name' => 'games', 'category_id' => $football->id]);
        Page::create(['name' => 'teams', 'category_id' => $football->id]);
        Page::create(['name' => 'transfers', 'category_id' => $football->id]);

        $hockey = PageCategory::where('name', 'hockey')->firstOrFail();
        Page::create(['name' => 'games', 'category_id' => $hockey->id]);
        Page::create(['name' => 'teams', 'category_id' => $hockey->id]);
        Page::create(['name' => 'players', 'category_id' => $hockey->id]);

        $boxing = PageCategory::where('name', 'boxing')->firstOrFail();
        Page::create(['name' => 'fighters', 'category_id' => $boxing->id]);
        Page::create(['name' => 'fights', 'category_id' => $boxing->id]);
        Page::create(['name' => 'weights', 'category_id' => $boxing->id]);
    }
}
