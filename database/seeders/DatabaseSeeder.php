<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserObserver::class,
            PageCategorySeeder::class,
            PageSeeder::class,
        ]);
    }
}
