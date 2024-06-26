<?php

namespace Database\Seeders;

use App\Models\Call_to_action;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        $this->call(ShowcaseSeeder::class);
        $this->call(CallToActionSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PricingSeeder::class);
        $this->call(StoryContentSeeder::class);
    }
}
