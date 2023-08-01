<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $continents = [
            // ['id' => 1, 'name' => 'Europe'],
            ['id' => 2, 'name' => 'Africa'],
            ['id' => 3, 'name' => 'Asia'],
            ['id' => 4, 'name' => 'North America'],
            ['id' => 5, 'name' => 'South America']
        ];

        foreach ($continents as $continent) {
            Continent::factory()->create($continent)
                ->each(function ($c) {
                    $c->countries()->saveMany(Country::factory(10)->make());
                });

        }

        // Product::factory(100)->create();
    }
}
