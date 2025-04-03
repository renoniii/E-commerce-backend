<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class
        ]);

        category::factory(100)->create();
        Product::factory(1000)->create();
    }
}
