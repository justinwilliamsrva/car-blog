<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        Topic::create(['name'=> 'Turo Rentals', 'slug' => 'turo']);
        Topic::create(['name'=> 'Maintenance and Repairs', 'slug' => 'maintenance']);
        Topic::create(['name'=> 'Car News', 'slug' => 'carnews']);
        \App\Models\Post::factory(10)->create();



    }
}
