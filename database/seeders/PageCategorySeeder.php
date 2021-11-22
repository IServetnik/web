<?php

namespace Database\Seeders;

use App\Models\PageCategory;
use Illuminate\Database\Seeder;

class PageCategorySeeder extends Seeder
{
    public function run()
    {
        PageCategory::create(['name' => 'football']);
        PageCategory::create(['name' => 'hockey']);
        PageCategory::create(['name' => 'boxing']);
    }
}
